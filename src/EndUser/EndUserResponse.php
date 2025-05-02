<?php

namespace Uru\NexWayDTO\EndUser;

use Uru\NexWayDTO\BaseDtoResponse;
use Uru\NexWayDTO\EndUser\EndUserResponse\EndUserItem;

/**
 * Response example:
 * {"items":
 * [
 * {
 * "id":"00000000-0000-0000-0000-000000000000",
 * "customerId":"00000000-0000-0000-0000-000000000000",
 * "enduserId":"00000000-0000-0000-0000-000000000000",
 * "createDate":1746190400342,
 * "updateDate":1746190400342,
 * "dbVersion":0,
 * "lastUpdateReason":"resource creation thru REST Api",
 * "accountCreated":false,
 * "email":"mail@email.com",
 * "country":"CY",
 * "zipCode":"3065",
 * "status":"ENABLED",
 * "type":"BUYER",
 * "firstName":"name",
 * "lastName":"lastName",
 * "city":"Limassol",
 * "locale":"en-US",
 * "streetAddress":"address",
 * "consumerType":"company",
 * "company":
 * {
 * "companyName":"companyName",,
 * "vatNumber":"231231231231",
 * "validVatNumber":false},
 * "phone":"+123123123",
 * "taxExemptionEligible":false,
 * "resellerTaxExemptionEligible":false,
 * "token":"00000000000000",
 * "storeId":"00000000-0000-0000-0000-000000000000",
 * "storeRoute":
 * {"fullUrl":"https:\/\/default.nexway.store",
 * "hostname":"default.nexway.store",
 * "url":"default"
 * },
 * "userName":"mail@email.com",
 * "fullName":"name lastName",,
 * "taxExemptionChecked":false,
 * "usingShippingAddress":false,
 * "addressError":false,
 * "maskedEmail":false,
 * "validVatNumber":false,
 * "availableCities":["\u039b\u03b5\u03bc\u03b5\u03c3\u03cc\u03c2","Lemesos"],
 * "accountExists":false
 * }
 * ],
 * "last":true,
 * "totalItems":1,
 * "totalPages":1,
 * "size":50,
 * "number":0
 * }
 */
class EndUserResponse extends BaseDtoResponse
{
    /**
     * @var null|EndUserItem[]
     */
    protected ?array $items = null;

    protected ?bool $last = null;

    protected ?int $totalItems = null;

    protected ?int $totalPages = null;

    protected ?int $size = null;

    protected ?int $number = null;

    public function getItems(): ?array
    {
        return $this->items;
    }

    public function setItems(?array $items): void
    {
        foreach ($items as $item) {
            $this->items[] = new EndUserItem($item);
        }
    }

    public function getLast(): ?bool
    {
        return $this->last;
    }

    public function setLast(?bool $last): void
    {
        $this->last = $last;
    }

    public function getTotalItems(): ?int
    {
        return $this->totalItems;
    }

    public function setTotalItems(?int $totalItems): void
    {
        $this->totalItems = $totalItems;
    }

    public function getTotalPages(): ?int
    {
        return $this->totalPages;
    }

    public function setTotalPages(?int $totalPages): void
    {
        $this->totalPages = $totalPages;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(?int $size): void
    {
        $this->size = $size;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): void
    {
        $this->number = $number;
    }
}
