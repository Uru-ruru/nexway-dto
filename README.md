[![Latest Stable Version](https://poser.pugx.org/uru-ruru/nexway-dto/v)](//packagist.org/packages/uru-ruru/nexway-dtoo)
[![Total Downloads](https://poser.pugx.org/uru-ruru/nexway-dto/downloads)](//packagist.org/packages/uru-ruru/nexway-dto)
[![Latest Unstable Version](https://poser.pugx.org/uru-ruru/nexway-dto/v/unstable)](//packagist.org/packages/uru-ruru/nexway-dto)
[![License](https://poser.pugx.org/uru-ruru/nexway-dto/license)](//packagist.org/packages/uru-ruru/nexway-dto)

# Models for NexWay integrations
Описание API - https://apidoc.nexway.store/docs/category/api-guides/index.html
## Установка
```shell
composer require uru-ruru/nexway-dto
```
## Использование
### Добавление или обновление продукта:

```php
        $data = new ProductRequest();

        if ($variant->getServiceCatalogueId()) {
            $data->setCatalogId($variant->getServiceCatalogueId());
        }
        $data->setCustomerId($this->customerId);
        $data->setSellingStores([$this->storeId]);
        $data->setStatus($variantComplex->isActive() ? Status::ENABLED : Status::DISABLED);
        $data->setProductFamily($variant->position->getName());
        $data->setPublisherRefId($variant->getId());
        $data->setGenericName($variantComplex->getFullName());
        $data->setType(ProductType::SOFTWARE);
        $data->setBusinessSegment(BusinessSegment::B2B);
        $data->setSalesMode(SalesMode::STANDARD);
        if ($this->fulfilmentTemplateId) {
            $data->setFulfillmentTemplate($this->fulfilmentTemplateId);
        }

        $prices = new Prices();
        $prices->setDefaultCurrency(self::DEFAULT_CURRENCY);
        $priceByCountryByCurrency = new PriceByCountryByCurrency();
        $priceByCountryByCurrency->setCurrency(self::DEFAULT_CURRENCY);
        $priceByCountryByCurrency->setValue($variantComplex->getPriceUser());
        $prices->setPriceByCountryByCurrency($priceByCountryByCurrency);

        $data->setPrices($prices);

        $data->setLifeTime(self::DEFAULT_LIFETIME);
        // товар с подпиской
        if ($variant->isSubscribeExist()) {
            $data->setLifeTime($variant->getSubscribe()->subscriptionType?->getPeriod());
            $data->setSubscriptionTemplate(SubscriptionTemplate::getTemplateForLifetime($variant->getSubscribe()->subscriptionType?->getPeriod()));
        }
        // output to curl
        echo json_encode($data);
```
### Добавление описания товара:

```php
        $data = new ProductDescriptionRequest();
        $data->setId($variant->getServiceDescriptionId());
        $data->setCustomerId($this->customerId);
        if ($variant->getServiceCatalogueId()) {
            $data->setCatalogId($variant->getServiceCatalogueId());
        }
        $data->setDescription($variantComplex->getFullName());
        if ($variant->getPreviewText()) {
            $data->setDescription($variant->getPreviewText());
        }
        if ($variant->getDetailText()) {
            $data->setDescription($variant->getDetailText());
        }
        $data->setFallbackLocale(self::DEFAULT_LOCALE);
        $data->setMarketingName($variantComplex->getFullName());
        $data->addLocalizedMarketingName(self::DEFAULT_LOCALE, $variantComplex->getFullName());
        if ('' !== $variant->getDetailText()) {
            $data->addLocalizedLongDesc(self::DEFAULT_LOCALE, $variant->getDetailText());
        }
        if ('' !== $variant->getPreviewText()) {
            $data->addLocalizedShortDesc(self::DEFAULT_LOCALE, $variant->getPreviewText());
        }

```
###  Создание корзины:

```php
        $data = new CartRequest();
        $data->setLocale(self::DEFAULT_LOCALE);
        $data->setStoreId($this->storeId);
        $data->setHideCrossSell(true);
        $data->setHideUpSell(true);

        $externalContext = new ExternalContext();
        $externalContext->setOrderId($order->getId());

        foreach ($order->getBasket()->getBasketItems() as $basketItem) {
            /** @var BasketItem $basketItem */
            $variant = $basketItem->getVariantComplex()->getVariant();
            /*
             * Не будем в ДР передавать позиции СМУА. У нас подписка будет в самом продукте
             * Если это отдельная подписка для старого заказа, то придется создать
             */
            if ($variant->isSubscribe() && !$basketItem->getPropertySmuaId()) {
                continue;
            }
            $item = new CartRequest\Products();
            $item->setId($variant->getServiceId());
            $item->setQuantity($basketItem->getQuantity());
            $item->setCurrency(self::DEFAULT_CURRENCY);
            $item->setOfferId($order->getId());
            $item->setOfferLineId($basketItem->getId());
            $item->setRemotePrice(true);

            $data->addWantedProduct($item);

            $externalBasketItem = new BasketItems();
            $externalBasketItem->setItemId($basketItem->getId());
            $externalBasketItem->setQuantity($basketItem->getQuantity());
            $externalBasketItem->setPrice($basketItem->getPrice());

            $externalContext->addBasketItem($externalBasketItem);
        }

        $data->setExternalContext($this->cryptService->encrypt($externalContext, true));

        $user = User::getById($order->getUserId());

        $endUser = new CartRequest\EndUser();
        $endUser->setFirstName($user->getFirstName() ?? '');
        $endUser->setLastName($user->getLastName() ?? '');

        $company = new CartRequest\Company();
        $company->setCompanyName($user->getCompanyName() ?? '');

        $endUser->setCompany($company);
        $endUser->setCity($user->getBillingAddressCity() ?? '');
        $endUser->setEmail($user->getEmail() ?? '');
        $endUser->setLocale(self::DEFAULT_LOCALE);
        $endUser->setZipCode($user->getBillingAddressCode() ?? '');
        $endUser->setCountry($user->getISOCountryCode() ?? '');
        $endUser->setStreetAddress($user->getBillingAddressStreet() ?? '');

        $data->setEndUser($endUser);

        if ($order->getCountry()) {
            $data->setCountry($order->getCountry()->getISOCountryCode() ?? '');
        }

        // output to curl
        echo json_encode($data);
```
