<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class InterfaceDetails extends Model
{
    /** @inheritDoc */
    protected $table = "interface_details";

    /** @inheritDoc */
    protected $attributes = [
        "interface" => "string",
        "mac" => "string",
        "type" => "int",
        "mtu" => "int",
        "metric" => "int",
        "flags" => "int",
        "ipackets" => "int",
        "opackets" => "int",
        "ibytes" => "int",
        "obytes" => "int",
        "ierrors" => "int",
        "oerrors" => "int",
        "idrops" => "int",
        "odrops" => "int",
        "collisions" => "int",
        "last_change" => "int",
        "link_speed" => "int",
        "pci_slot" => "string",
        "friendly_name" => "string",
        "description" => "string",
        "manufacturer" => "string",
        "connection_id" => "string",
        "connection_status" => "string",
        "enabled" => "int",
        "physical_adapter" => "int",
        "speed" => "int",
        "service" => "string",
        "dhcp_enabled" => "int",
        "dhcp_lease_expires" => "string",
        "dhcp_lease_obtained" => "string",
        "dhcp_server" => "string",
        "dns_domain" => "string",
        "dns_domain_suffix_search_order" => "string",
        "dns_host_name" => "string",
        "dns_server_search_order" => "string",
    ];


    /** @return string */
    public function getInterface(): string
    {
        $value = $this->getAttribute("interface");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("interface", $value, "string");
    }


    /** @return string */
    public function getMac(): string
    {
        $value = $this->getAttribute("mac");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("mac", $value, "string");
    }


    /** @return int */
    public function getType(): int
    {
        $value = $this->getAttribute("type");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("type", $value, "int");
    }


    /** @return int */
    public function getMtu(): int
    {
        $value = $this->getAttribute("mtu");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("mtu", $value, "int");
    }


    /** @return int */
    public function getMetric(): int
    {
        $value = $this->getAttribute("metric");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("metric", $value, "int");
    }


    /** @return int */
    public function getFlags(): int
    {
        $value = $this->getAttribute("flags");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("flags", $value, "int");
    }


    /** @return int */
    public function getIpackets(): int
    {
        $value = $this->getAttribute("ipackets");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("ipackets", $value, "int");
    }


    /** @return int */
    public function getOpackets(): int
    {
        $value = $this->getAttribute("opackets");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("opackets", $value, "int");
    }


    /** @return int */
    public function getIbytes(): int
    {
        $value = $this->getAttribute("ibytes");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("ibytes", $value, "int");
    }


    /** @return int */
    public function getObytes(): int
    {
        $value = $this->getAttribute("obytes");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("obytes", $value, "int");
    }


    /** @return int */
    public function getIerrors(): int
    {
        $value = $this->getAttribute("ierrors");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("ierrors", $value, "int");
    }


    /** @return int */
    public function getOerrors(): int
    {
        $value = $this->getAttribute("oerrors");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("oerrors", $value, "int");
    }


    /** @return int */
    public function getIdrops(): int
    {
        $value = $this->getAttribute("idrops");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("idrops", $value, "int");
    }


    /** @return int */
    public function getOdrops(): int
    {
        $value = $this->getAttribute("odrops");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("odrops", $value, "int");
    }


    /** @return int */
    public function getCollisions(): int
    {
        $value = $this->getAttribute("collisions");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("collisions", $value, "int");
    }


    /** @return int */
    public function getLastChange(): int
    {
        $value = $this->getAttribute("last_change");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("last_change", $value, "int");
    }


    /** @return int */
    public function getLinkSpeed(): int
    {
        $value = $this->getAttribute("link_speed");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("link_speed", $value, "int");
    }


    /** @return string */
    public function getPciSlot(): string
    {
        $value = $this->getAttribute("pci_slot");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("pci_slot", $value, "string");
    }


    /** @return string */
    public function getFriendlyName(): string
    {
        $value = $this->getAttribute("friendly_name");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("friendly_name", $value, "string");
    }


    /** @return string */
    public function getDescription(): string
    {
        $value = $this->getAttribute("description");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("description", $value, "string");
    }


    /** @return string */
    public function getManufacturer(): string
    {
        $value = $this->getAttribute("manufacturer");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("manufacturer", $value, "string");
    }


    /** @return string */
    public function getConnectionId(): string
    {
        $value = $this->getAttribute("connection_id");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("connection_id", $value, "string");
    }


    /** @return string */
    public function getConnectionStatus(): string
    {
        $value = $this->getAttribute("connection_status");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("connection_status", $value, "string");
    }


    /** @return int */
    public function getEnabled(): int
    {
        $value = $this->getAttribute("enabled");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("enabled", $value, "int");
    }


    /** @return int */
    public function getPhysicalAdapter(): int
    {
        $value = $this->getAttribute("physical_adapter");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("physical_adapter", $value, "int");
    }


    /** @return int */
    public function getSpeed(): int
    {
        $value = $this->getAttribute("speed");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("speed", $value, "int");
    }


    /** @return string */
    public function getService(): string
    {
        $value = $this->getAttribute("service");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("service", $value, "string");
    }


    /** @return int */
    public function getDhcpEnabled(): int
    {
        $value = $this->getAttribute("dhcp_enabled");
        if (is_int($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("dhcp_enabled", $value, "int");
    }


    /** @return string */
    public function getDhcpLeaseExpires(): string
    {
        $value = $this->getAttribute("dhcp_lease_expires");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("dhcp_lease_expires", $value, "string");
    }


    /** @return string */
    public function getDhcpLeaseObtained(): string
    {
        $value = $this->getAttribute("dhcp_lease_obtained");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("dhcp_lease_obtained", $value, "string");
    }


    /** @return string */
    public function getDhcpServer(): string
    {
        $value = $this->getAttribute("dhcp_server");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("dhcp_server", $value, "string");
    }


    /** @return string */
    public function getDnsDomain(): string
    {
        $value = $this->getAttribute("dns_domain");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("dns_domain", $value, "string");
    }


    /** @return string */
    public function getDnsDomainSuffixSearchOrder(): string
    {
        $value = $this->getAttribute("dns_domain_suffix_search_order");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("dns_domain_suffix_search_order", $value, "string");
    }


    /** @return string */
    public function getDnsHostName(): string
    {
        $value = $this->getAttribute("dns_host_name");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("dns_host_name", $value, "string");
    }


    /** @return string */
    public function getDnsServerSearchOrder(): string
    {
        $value = $this->getAttribute("dns_server_search_order");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("dns_server_search_order", $value, "string");
    }
}
