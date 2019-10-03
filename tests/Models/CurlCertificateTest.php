<?php

namespace OhKannaDuh\OsQueryTests\Models;

use OhKannaDuh\OsQuery\Models\CurlCertificate;
use OhKannaDuh\OsQueryTests\TestCase;

final class CurlCertificateTest extends TestCase
{
    /** @inheritDoc */
    protected $usesContainer = true;


    /**
     * Ensure we can get the hostname attribute from our model [CurlCertificate].
     */
    public function testGetHostname(): void
    {
        $model = CurlCertificate::load([
            "hostname" => "hostname",
        ], $this->container);

        $this->assertSame("hostname", $model->getHostname());
    }


    /**
     * Ensure we can get the common_name attribute from our model [CurlCertificate].
     */
    public function testGetCommonName(): void
    {
        $model = CurlCertificate::load([
            "common_name" => "common_name",
        ], $this->container);

        $this->assertSame("common_name", $model->getCommonName());
    }


    /**
     * Ensure we can get the organization attribute from our model [CurlCertificate].
     */
    public function testGetOrganization(): void
    {
        $model = CurlCertificate::load([
            "organization" => "organization",
        ], $this->container);

        $this->assertSame("organization", $model->getOrganization());
    }


    /**
     * Ensure we can get the organization_unit attribute from our model [CurlCertificate].
     */
    public function testGetOrganizationUnit(): void
    {
        $model = CurlCertificate::load([
            "organization_unit" => "organization_unit",
        ], $this->container);

        $this->assertSame("organization_unit", $model->getOrganizationUnit());
    }


    /**
     * Ensure we can get the serial_number attribute from our model [CurlCertificate].
     */
    public function testGetSerialNumber(): void
    {
        $model = CurlCertificate::load([
            "serial_number" => "serial_number",
        ], $this->container);

        $this->assertSame("serial_number", $model->getSerialNumber());
    }


    /**
     * Ensure we can get the issuer_common_name attribute from our model [CurlCertificate].
     */
    public function testGetIssuerCommonName(): void
    {
        $model = CurlCertificate::load([
            "issuer_common_name" => "issuer_common_name",
        ], $this->container);

        $this->assertSame("issuer_common_name", $model->getIssuerCommonName());
    }


    /**
     * Ensure we can get the issuer_organization attribute from our model [CurlCertificate].
     */
    public function testGetIssuerOrganization(): void
    {
        $model = CurlCertificate::load([
            "issuer_organization" => "issuer_organization",
        ], $this->container);

        $this->assertSame("issuer_organization", $model->getIssuerOrganization());
    }


    /**
     * Ensure we can get the issuer_organization_unit attribute from our model [CurlCertificate].
     */
    public function testGetIssuerOrganizationUnit(): void
    {
        $model = CurlCertificate::load([
            "issuer_organization_unit" => "issuer_organization_unit",
        ], $this->container);

        $this->assertSame("issuer_organization_unit", $model->getIssuerOrganizationUnit());
    }


    /**
     * Ensure we can get the valid_from attribute from our model [CurlCertificate].
     */
    public function testGetValidFrom(): void
    {
        $model = CurlCertificate::load([
            "valid_from" => "valid_from",
        ], $this->container);

        $this->assertSame("valid_from", $model->getValidFrom());
    }


    /**
     * Ensure we can get the valid_to attribute from our model [CurlCertificate].
     */
    public function testGetValidTo(): void
    {
        $model = CurlCertificate::load([
            "valid_to" => "valid_to",
        ], $this->container);

        $this->assertSame("valid_to", $model->getValidTo());
    }


    /**
     * Ensure we can get the sha256_fingerprint attribute from our model [CurlCertificate].
     */
    public function testGetSha256Fingerprint(): void
    {
        $model = CurlCertificate::load([
            "sha256_fingerprint" => "sha256_fingerprint",
        ], $this->container);

        $this->assertSame("sha256_fingerprint", $model->getSha256Fingerprint());
    }


    /**
     * Ensure we can get the sha1_fingerprint attribute from our model [CurlCertificate].
     */
    public function testGetSha1Fingerprint(): void
    {
        $model = CurlCertificate::load([
            "sha1_fingerprint" => "sha1_fingerprint",
        ], $this->container);

        $this->assertSame("sha1_fingerprint", $model->getSha1Fingerprint());
    }
}
