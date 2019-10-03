<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\InterfaceDetails;
use OhKannaDuh\OsQueryTests\TestCase;

final class InterfaceDetailsTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the interface attribute from our model [InterfaceDetails].
     */
    public function testGetInterface(): void
    {
        $model = InterfaceDetails::load([
            "interface" => "interface",
        ], $this->container);

        $this->assertSame("interface", $model->getInterface());
    }


    /**
     * Ensure we can get the mac attribute from our model [InterfaceDetails].
     */
    public function testGetMac(): void
    {
        $model = InterfaceDetails::load([
            "mac" => "mac",
        ], $this->container);

        $this->assertSame("mac", $model->getMac());
    }


    /**
     * Ensure we can get the type attribute from our model [InterfaceDetails].
     */
    public function testGetType(): void
    {
        $model = InterfaceDetails::load([
            "type" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getType());
    }


    /**
     * Ensure we can get the mtu attribute from our model [InterfaceDetails].
     */
    public function testGetMtu(): void
    {
        $model = InterfaceDetails::load([
            "mtu" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getMtu());
    }


    /**
     * Ensure we can get the metric attribute from our model [InterfaceDetails].
     */
    public function testGetMetric(): void
    {
        $model = InterfaceDetails::load([
            "metric" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getMetric());
    }


    /**
     * Ensure we can get the flags attribute from our model [InterfaceDetails].
     */
    public function testGetFlags(): void
    {
        $model = InterfaceDetails::load([
            "flags" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getFlags());
    }


    /**
     * Ensure we can get the ipackets attribute from our model [InterfaceDetails].
     */
    public function testGetIpackets(): void
    {
        $model = InterfaceDetails::load([
            "ipackets" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getIpackets());
    }


    /**
     * Ensure we can get the opackets attribute from our model [InterfaceDetails].
     */
    public function testGetOpackets(): void
    {
        $model = InterfaceDetails::load([
            "opackets" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getOpackets());
    }


    /**
     * Ensure we can get the ibytes attribute from our model [InterfaceDetails].
     */
    public function testGetIbytes(): void
    {
        $model = InterfaceDetails::load([
            "ibytes" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getIbytes());
    }


    /**
     * Ensure we can get the obytes attribute from our model [InterfaceDetails].
     */
    public function testGetObytes(): void
    {
        $model = InterfaceDetails::load([
            "obytes" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getObytes());
    }


    /**
     * Ensure we can get the ierrors attribute from our model [InterfaceDetails].
     */
    public function testGetIerrors(): void
    {
        $model = InterfaceDetails::load([
            "ierrors" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getIerrors());
    }


    /**
     * Ensure we can get the oerrors attribute from our model [InterfaceDetails].
     */
    public function testGetOerrors(): void
    {
        $model = InterfaceDetails::load([
            "oerrors" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getOerrors());
    }


    /**
     * Ensure we can get the idrops attribute from our model [InterfaceDetails].
     */
    public function testGetIdrops(): void
    {
        $model = InterfaceDetails::load([
            "idrops" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getIdrops());
    }


    /**
     * Ensure we can get the odrops attribute from our model [InterfaceDetails].
     */
    public function testGetOdrops(): void
    {
        $model = InterfaceDetails::load([
            "odrops" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getOdrops());
    }


    /**
     * Ensure we can get the collisions attribute from our model [InterfaceDetails].
     */
    public function testGetCollisions(): void
    {
        $model = InterfaceDetails::load([
            "collisions" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getCollisions());
    }


    /**
     * Ensure we can get the last_change attribute from our model [InterfaceDetails].
     */
    public function testGetLastChange(): void
    {
        $model = InterfaceDetails::load([
            "last_change" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getLastChange());
    }


    /**
     * Ensure we can get the link_speed attribute from our model [InterfaceDetails].
     */
    public function testGetLinkSpeed(): void
    {
        $model = InterfaceDetails::load([
            "link_speed" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getLinkSpeed());
    }


    /**
     * Ensure we can get the pci_slot attribute from our model [InterfaceDetails].
     */
    public function testGetPciSlot(): void
    {
        $model = InterfaceDetails::load([
            "pci_slot" => "pci_slot",
        ], $this->container);

        $this->assertSame("pci_slot", $model->getPciSlot());
    }


    /**
     * Ensure we can get the friendly_name attribute from our model [InterfaceDetails].
     */
    public function testGetFriendlyName(): void
    {
        $model = InterfaceDetails::load([
            "friendly_name" => "friendly_name",
        ], $this->container);

        $this->assertSame("friendly_name", $model->getFriendlyName());
    }


    /**
     * Ensure we can get the description attribute from our model [InterfaceDetails].
     */
    public function testGetDescription(): void
    {
        $model = InterfaceDetails::load([
            "description" => "description",
        ], $this->container);

        $this->assertSame("description", $model->getDescription());
    }


    /**
     * Ensure we can get the manufacturer attribute from our model [InterfaceDetails].
     */
    public function testGetManufacturer(): void
    {
        $model = InterfaceDetails::load([
            "manufacturer" => "manufacturer",
        ], $this->container);

        $this->assertSame("manufacturer", $model->getManufacturer());
    }


    /**
     * Ensure we can get the connection_id attribute from our model [InterfaceDetails].
     */
    public function testGetConnectionId(): void
    {
        $model = InterfaceDetails::load([
            "connection_id" => "connection_id",
        ], $this->container);

        $this->assertSame("connection_id", $model->getConnectionId());
    }


    /**
     * Ensure we can get the connection_status attribute from our model [InterfaceDetails].
     */
    public function testGetConnectionStatus(): void
    {
        $model = InterfaceDetails::load([
            "connection_status" => "connection_status",
        ], $this->container);

        $this->assertSame("connection_status", $model->getConnectionStatus());
    }


    /**
     * Ensure we can get the enabled attribute from our model [InterfaceDetails].
     */
    public function testGetEnabled(): void
    {
        $model = InterfaceDetails::load([
            "enabled" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getEnabled());
    }


    /**
     * Ensure we can get the physical_adapter attribute from our model [InterfaceDetails].
     */
    public function testGetPhysicalAdapter(): void
    {
        $model = InterfaceDetails::load([
            "physical_adapter" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getPhysicalAdapter());
    }


    /**
     * Ensure we can get the speed attribute from our model [InterfaceDetails].
     */
    public function testGetSpeed(): void
    {
        $model = InterfaceDetails::load([
            "speed" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getSpeed());
    }


    /**
     * Ensure we can get the service attribute from our model [InterfaceDetails].
     */
    public function testGetService(): void
    {
        $model = InterfaceDetails::load([
            "service" => "service",
        ], $this->container);

        $this->assertSame("service", $model->getService());
    }


    /**
     * Ensure we can get the dhcp_enabled attribute from our model [InterfaceDetails].
     */
    public function testGetDhcpEnabled(): void
    {
        $model = InterfaceDetails::load([
            "dhcp_enabled" => 46290,
        ], $this->container);

        $this->assertSame(46290, $model->getDhcpEnabled());
    }


    /**
     * Ensure we can get the dhcp_lease_expires attribute from our model [InterfaceDetails].
     */
    public function testGetDhcpLeaseExpires(): void
    {
        $model = InterfaceDetails::load([
            "dhcp_lease_expires" => "dhcp_lease_expires",
        ], $this->container);

        $this->assertSame("dhcp_lease_expires", $model->getDhcpLeaseExpires());
    }


    /**
     * Ensure we can get the dhcp_lease_obtained attribute from our model [InterfaceDetails].
     */
    public function testGetDhcpLeaseObtained(): void
    {
        $model = InterfaceDetails::load([
            "dhcp_lease_obtained" => "dhcp_lease_obtained",
        ], $this->container);

        $this->assertSame("dhcp_lease_obtained", $model->getDhcpLeaseObtained());
    }


    /**
     * Ensure we can get the dhcp_server attribute from our model [InterfaceDetails].
     */
    public function testGetDhcpServer(): void
    {
        $model = InterfaceDetails::load([
            "dhcp_server" => "dhcp_server",
        ], $this->container);

        $this->assertSame("dhcp_server", $model->getDhcpServer());
    }


    /**
     * Ensure we can get the dns_domain attribute from our model [InterfaceDetails].
     */
    public function testGetDnsDomain(): void
    {
        $model = InterfaceDetails::load([
            "dns_domain" => "dns_domain",
        ], $this->container);

        $this->assertSame("dns_domain", $model->getDnsDomain());
    }


    /**
     * Ensure we can get the dns_domain_suffix_search_order attribute from our model [InterfaceDetails].
     */
    public function testGetDnsDomainSuffixSearchOrder(): void
    {
        $model = InterfaceDetails::load([
            "dns_domain_suffix_search_order" => "dns_domain_suffix_search_order",
        ], $this->container);

        $this->assertSame("dns_domain_suffix_search_order", $model->getDnsDomainSuffixSearchOrder());
    }


    /**
     * Ensure we can get the dns_host_name attribute from our model [InterfaceDetails].
     */
    public function testGetDnsHostName(): void
    {
        $model = InterfaceDetails::load([
            "dns_host_name" => "dns_host_name",
        ], $this->container);

        $this->assertSame("dns_host_name", $model->getDnsHostName());
    }


    /**
     * Ensure we can get the dns_server_search_order attribute from our model [InterfaceDetails].
     */
    public function testGetDnsServerSearchOrder(): void
    {
        $model = InterfaceDetails::load([
            "dns_server_search_order" => "dns_server_search_order",
        ], $this->container);

        $this->assertSame("dns_server_search_order", $model->getDnsServerSearchOrder());
    }
}
