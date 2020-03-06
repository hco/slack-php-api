<?php

declare(strict_types=1);

/*
 * This file is part of JoliCode's Slack PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ChatScheduleMessagePostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ChatScheduleMessagePostResponse200();
        if (\array_key_exists('channel', $data) && null !== $data['channel']) {
            $object->setChannel($data['channel']);
        } elseif (\array_key_exists('channel', $data) && null === $data['channel']) {
            $object->setChannel(null);
        }
        if (\array_key_exists('message', $data) && null !== $data['message']) {
            $object->setMessage($this->denormalizer->denormalize($data['message'], 'JoliCode\\Slack\\Api\\Model\\ChatScheduleMessagePostResponse200Message', 'json', $context));
        } elseif (\array_key_exists('message', $data) && null === $data['message']) {
            $object->setMessage(null);
        }
        if (\array_key_exists('ok', $data) && null !== $data['ok']) {
            $object->setOk($data['ok']);
        } elseif (\array_key_exists('ok', $data) && null === $data['ok']) {
            $object->setOk(null);
        }
        if (\array_key_exists('post_at', $data) && null !== $data['post_at']) {
            $object->setPostAt($data['post_at']);
        } elseif (\array_key_exists('post_at', $data) && null === $data['post_at']) {
            $object->setPostAt(null);
        }
        if (\array_key_exists('scheduled_message_id', $data) && null !== $data['scheduled_message_id']) {
            $object->setScheduledMessageId($data['scheduled_message_id']);
        } elseif (\array_key_exists('scheduled_message_id', $data) && null === $data['scheduled_message_id']) {
            $object->setScheduledMessageId(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getChannel()) {
            $data['channel'] = $object->getChannel();
        } else {
            $data['channel'] = null;
        }
        if (null !== $object->getMessage()) {
            $data['message'] = $this->normalizer->normalize($object->getMessage(), 'json', $context);
        } else {
            $data['message'] = null;
        }
        if (null !== $object->getOk()) {
            $data['ok'] = $object->getOk();
        } else {
            $data['ok'] = null;
        }
        if (null !== $object->getPostAt()) {
            $data['post_at'] = $object->getPostAt();
        } else {
            $data['post_at'] = null;
        }
        if (null !== $object->getScheduledMessageId()) {
            $data['scheduled_message_id'] = $object->getScheduledMessageId();
        } else {
            $data['scheduled_message_id'] = null;
        }

        return $data;
    }
}
