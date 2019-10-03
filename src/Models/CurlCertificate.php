<?php

namespace OhKannaDuh\OsQuery\Models;

use OhKannaDuh\OsQuery\Exceptions\InvalidAttributeTypeException;
use OhKannaDuh\OsQuery\Model;

final class CurlCertificate extends Model
{
    /** @inheritDoc */
    protected $table = "curl_certificate";

    /** @inheritDoc */
    protected $attributes = [
        "hostname" => "string",
        "common_name" => "string",
        "organization" => "string",
        "organization_unit" => "string",
        "serial_number" => "string",
        "issuer_common_name" => "string",
        "issuer_organization" => "string",
        "issuer_organization_unit" => "string",
        "valid_from" => "string",
        "valid_to" => "string",
        "sha256_fingerprint" => "string",
        "sha1_fingerprint" => "string",
    ];


    /** @return string */
    public function getHostname(): string
    {
        $value = $this->getAttribute("hostname");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("hostname", $value, "string");
    }


    /** @return string */
    public function getCommonName(): string
    {
        $value = $this->getAttribute("common_name");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("common_name", $value, "string");
    }


    /** @return string */
    public function getOrganization(): string
    {
        $value = $this->getAttribute("organization");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("organization", $value, "string");
    }


    /** @return string */
    public function getOrganizationUnit(): string
    {
        $value = $this->getAttribute("organization_unit");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("organization_unit", $value, "string");
    }


    /** @return string */
    public function getSerialNumber(): string
    {
        $value = $this->getAttribute("serial_number");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("serial_number", $value, "string");
    }


    /** @return string */
    public function getIssuerCommonName(): string
    {
        $value = $this->getAttribute("issuer_common_name");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("issuer_common_name", $value, "string");
    }


    /** @return string */
    public function getIssuerOrganization(): string
    {
        $value = $this->getAttribute("issuer_organization");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("issuer_organization", $value, "string");
    }


    /** @return string */
    public function getIssuerOrganizationUnit(): string
    {
        $value = $this->getAttribute("issuer_organization_unit");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("issuer_organization_unit", $value, "string");
    }


    /** @return string */
    public function getValidFrom(): string
    {
        $value = $this->getAttribute("valid_from");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("valid_from", $value, "string");
    }


    /** @return string */
    public function getValidTo(): string
    {
        $value = $this->getAttribute("valid_to");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("valid_to", $value, "string");
    }


    /** @return string */
    public function getSha256Fingerprint(): string
    {
        $value = $this->getAttribute("sha256_fingerprint");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("sha256_fingerprint", $value, "string");
    }


    /** @return string */
    public function getSha1Fingerprint(): string
    {
        $value = $this->getAttribute("sha1_fingerprint");
        if (is_string($value) === true) {
            return $value;
        }

        throw new InvalidAttributeTypeException("sha1_fingerprint", $value, "string");
    }
}
