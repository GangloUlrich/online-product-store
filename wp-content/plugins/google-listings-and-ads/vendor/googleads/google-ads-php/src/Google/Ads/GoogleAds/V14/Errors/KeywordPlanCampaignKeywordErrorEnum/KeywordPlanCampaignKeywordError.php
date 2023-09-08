<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/errors/keyword_plan_campaign_keyword_error.proto

namespace Google\Ads\GoogleAds\V14\Errors\KeywordPlanCampaignKeywordErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible errors from applying a keyword plan campaign
 * keyword.
 *
 * Protobuf type <code>google.ads.googleads.v14.errors.KeywordPlanCampaignKeywordErrorEnum.KeywordPlanCampaignKeywordError</code>
 */
class KeywordPlanCampaignKeywordError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Keyword plan campaign keyword is positive.
     *
     * Generated from protobuf enum <code>CAMPAIGN_KEYWORD_IS_POSITIVE = 8;</code>
     */
    const CAMPAIGN_KEYWORD_IS_POSITIVE = 8;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CAMPAIGN_KEYWORD_IS_POSITIVE => 'CAMPAIGN_KEYWORD_IS_POSITIVE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KeywordPlanCampaignKeywordError::class, \Google\Ads\GoogleAds\V14\Errors\KeywordPlanCampaignKeywordErrorEnum_KeywordPlanCampaignKeywordError::class);

