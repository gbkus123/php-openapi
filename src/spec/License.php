<?php

namespace cebe\openapi\spec;

use cebe\openapi\SpecBaseObject;

/**
 * License information for the exposed API.
 *
 * @link https://github.com/OAI/OpenAPI-Specification/blob/3.0.2/versions/3.0.2.md#licenseObject
 *
 * @property-read string $name
 * @property-read string $url
 *
 * @author Carsten Brandt <mail@cebe.cc>
 */
class License extends SpecBaseObject
{
    /**
     * @return array array of attributes available in this object.
     */
    protected function attributes(): array
    {
        return [
            'name' => 'string',
            'url' => 'string',
        ];
    }

    /**
     * Perform validation on this object, check data against OpenAPI Specification rules.
     *
     * Call `addError()` in case of validation errors.
     */
    protected function performValidation()
    {
        $this->requireProperties(['name']);
        $this->validateUrl('url');
    }
}
