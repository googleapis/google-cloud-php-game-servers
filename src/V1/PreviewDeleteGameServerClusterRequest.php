<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1/game_server_clusters.proto

namespace Google\Cloud\Gaming\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for GameServerClustersService.PreviewDeleteGameServerCluster.
 *
 * Generated from protobuf message <code>google.cloud.gaming.v1.PreviewDeleteGameServerClusterRequest</code>
 */
class PreviewDeleteGameServerClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the game server cluster to delete. Uses the form:
     * `projects/{project}/locations/{location}/gameServerClusters/{cluster}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Optional. The target timestamp to compute the preview.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp preview_time = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $preview_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the game server cluster to delete. Uses the form:
     *           `projects/{project}/locations/{location}/gameServerClusters/{cluster}`.
     *     @type \Google\Protobuf\Timestamp $preview_time
     *           Optional. The target timestamp to compute the preview.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gaming\V1\GameServerClusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the game server cluster to delete. Uses the form:
     * `projects/{project}/locations/{location}/gameServerClusters/{cluster}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the game server cluster to delete. Uses the form:
     * `projects/{project}/locations/{location}/gameServerClusters/{cluster}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. The target timestamp to compute the preview.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp preview_time = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getPreviewTime()
    {
        return $this->preview_time;
    }

    /**
     * Optional. The target timestamp to compute the preview.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp preview_time = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setPreviewTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->preview_time = $var;

        return $this;
    }

}

