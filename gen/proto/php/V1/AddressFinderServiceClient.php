<?php
// GENERATED CODE -- DO NOT EDIT!

namespace V1;

/**
 */
class AddressFinderServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \V1\FindAddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FindAddress(\V1\FindAddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/v1.AddressFinderService/FindAddress',
        $argument,
        ['\V1\FindAddressResponse', 'decode'],
        $metadata, $options);
    }

}
