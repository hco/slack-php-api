<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ObjsChannelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsChannel';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \JoliCode\Slack\Api\Model\ObjsChannel;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsChannel();
        $data = clone $data;
        if (property_exists($data, 'accepted_user')) {
            $object->setAcceptedUser($data->{'accepted_user'});
            unset($data->{'accepted_user'});
        }
        if (property_exists($data, 'created')) {
            $object->setCreated($data->{'created'});
            unset($data->{'created'});
        }
        if (property_exists($data, 'creator')) {
            $object->setCreator($data->{'creator'});
            unset($data->{'creator'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
            unset($data->{'id'});
        }
        if (property_exists($data, 'is_archived')) {
            $object->setIsArchived($data->{'is_archived'});
            unset($data->{'is_archived'});
        }
        if (property_exists($data, 'is_channel')) {
            $object->setIsChannel($data->{'is_channel'});
            unset($data->{'is_channel'});
        }
        if (property_exists($data, 'is_general')) {
            $object->setIsGeneral($data->{'is_general'});
            unset($data->{'is_general'});
        }
        if (property_exists($data, 'is_member')) {
            $object->setIsMember($data->{'is_member'});
            unset($data->{'is_member'});
        }
        if (property_exists($data, 'is_moved')) {
            $object->setIsMoved($data->{'is_moved'});
            unset($data->{'is_moved'});
        }
        if (property_exists($data, 'is_mpim')) {
            $object->setIsMpim($data->{'is_mpim'});
            unset($data->{'is_mpim'});
        }
        if (property_exists($data, 'is_org_shared')) {
            $object->setIsOrgShared($data->{'is_org_shared'});
            unset($data->{'is_org_shared'});
        }
        if (property_exists($data, 'is_pending_ext_shared')) {
            $object->setIsPendingExtShared($data->{'is_pending_ext_shared'});
            unset($data->{'is_pending_ext_shared'});
        }
        if (property_exists($data, 'is_private')) {
            $object->setIsPrivate($data->{'is_private'});
            unset($data->{'is_private'});
        }
        if (property_exists($data, 'is_read_only')) {
            $object->setIsReadOnly($data->{'is_read_only'});
            unset($data->{'is_read_only'});
        }
        if (property_exists($data, 'is_shared')) {
            $object->setIsShared($data->{'is_shared'});
            unset($data->{'is_shared'});
        }
        if (property_exists($data, 'last_read')) {
            $value = $data->{'last_read'};
            if (is_string($data->{'last_read'})) {
                $value = $data->{'last_read'};
            }
            $object->setLastRead($value);
            unset($data->{'last_read'});
        }
        if (property_exists($data, 'latest')) {
            $object->setLatest($data->{'latest'});
            unset($data->{'latest'});
        }
        if (property_exists($data, 'members')) {
            $values = [];
            foreach ($data->{'members'} as $value_1) {
                $values[] = $value_1;
            }
            $object->setMembers($values);
            unset($data->{'members'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
            unset($data->{'name'});
        }
        if (property_exists($data, 'name_normalized')) {
            $object->setNameNormalized($data->{'name_normalized'});
            unset($data->{'name_normalized'});
        }
        if (property_exists($data, 'num_members')) {
            $object->setNumMembers($data->{'num_members'});
            unset($data->{'num_members'});
        }
        if (property_exists($data, 'pending_shared')) {
            $values_1 = [];
            foreach ($data->{'pending_shared'} as $value_2) {
                $values_1[] = $value_2;
            }
            $object->setPendingShared($values_1);
            unset($data->{'pending_shared'});
        }
        if (property_exists($data, 'previous_names')) {
            $values_2 = [];
            foreach ($data->{'previous_names'} as $value_3) {
                $values_2[] = $value_3;
            }
            $object->setPreviousNames($values_2);
            unset($data->{'previous_names'});
        }
        if (property_exists($data, 'priority')) {
            $object->setPriority($data->{'priority'});
            unset($data->{'priority'});
        }
        if (property_exists($data, 'purpose')) {
            $object->setPurpose($this->denormalizer->denormalize($data->{'purpose'}, 'JoliCode\\Slack\\Api\\Model\\ObjsChannelPurpose', 'json', $context));
            unset($data->{'purpose'});
        }
        if (property_exists($data, 'topic')) {
            $object->setTopic($this->denormalizer->denormalize($data->{'topic'}, 'JoliCode\\Slack\\Api\\Model\\ObjsChannelTopic', 'json', $context));
            unset($data->{'topic'});
        }
        if (property_exists($data, 'unlinked')) {
            $object->setUnlinked($data->{'unlinked'});
            unset($data->{'unlinked'});
        }
        if (property_exists($data, 'unread_count')) {
            $object->setUnreadCount($data->{'unread_count'});
            unset($data->{'unread_count'});
        }
        if (property_exists($data, 'unread_count_display')) {
            $object->setUnreadCountDisplay($data->{'unread_count_display'});
            unset($data->{'unread_count_display'});
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value_4;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAcceptedUser()) {
            $data->{'accepted_user'} = $object->getAcceptedUser();
        }
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        }
        if (null !== $object->getCreator()) {
            $data->{'creator'} = $object->getCreator();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getIsArchived()) {
            $data->{'is_archived'} = $object->getIsArchived();
        }
        if (null !== $object->getIsChannel()) {
            $data->{'is_channel'} = $object->getIsChannel();
        }
        if (null !== $object->getIsGeneral()) {
            $data->{'is_general'} = $object->getIsGeneral();
        }
        if (null !== $object->getIsMember()) {
            $data->{'is_member'} = $object->getIsMember();
        }
        if (null !== $object->getIsMoved()) {
            $data->{'is_moved'} = $object->getIsMoved();
        }
        if (null !== $object->getIsMpim()) {
            $data->{'is_mpim'} = $object->getIsMpim();
        }
        if (null !== $object->getIsOrgShared()) {
            $data->{'is_org_shared'} = $object->getIsOrgShared();
        }
        if (null !== $object->getIsPendingExtShared()) {
            $data->{'is_pending_ext_shared'} = $object->getIsPendingExtShared();
        }
        if (null !== $object->getIsPrivate()) {
            $data->{'is_private'} = $object->getIsPrivate();
        }
        if (null !== $object->getIsReadOnly()) {
            $data->{'is_read_only'} = $object->getIsReadOnly();
        }
        if (null !== $object->getIsShared()) {
            $data->{'is_shared'} = $object->getIsShared();
        }
        if (null !== $object->getLastRead()) {
            $value = $object->getLastRead();
            if (is_string($object->getLastRead())) {
                $value = $object->getLastRead();
            }
            $data->{'last_read'} = $value;
        }
        if (null !== $object->getLatest()) {
            $data->{'latest'} = $object->getLatest();
        }
        if (null !== $object->getMembers()) {
            $values = [];
            foreach ($object->getMembers() as $value_1) {
                $values[] = $value_1;
            }
            $data->{'members'} = $values;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getNameNormalized()) {
            $data->{'name_normalized'} = $object->getNameNormalized();
        }
        if (null !== $object->getNumMembers()) {
            $data->{'num_members'} = $object->getNumMembers();
        }
        if (null !== $object->getPendingShared()) {
            $values_1 = [];
            foreach ($object->getPendingShared() as $value_2) {
                $values_1[] = $value_2;
            }
            $data->{'pending_shared'} = $values_1;
        }
        if (null !== $object->getPreviousNames()) {
            $values_2 = [];
            foreach ($object->getPreviousNames() as $value_3) {
                $values_2[] = $value_3;
            }
            $data->{'previous_names'} = $values_2;
        }
        if (null !== $object->getPriority()) {
            $data->{'priority'} = $object->getPriority();
        }
        if (null !== $object->getPurpose()) {
            $data->{'purpose'} = $this->normalizer->normalize($object->getPurpose(), 'json', $context);
        }
        if (null !== $object->getTopic()) {
            $data->{'topic'} = $this->normalizer->normalize($object->getTopic(), 'json', $context);
        }
        if (null !== $object->getUnlinked()) {
            $data->{'unlinked'} = $object->getUnlinked();
        }
        if (null !== $object->getUnreadCount()) {
            $data->{'unread_count'} = $object->getUnreadCount();
        }
        if (null !== $object->getUnreadCountDisplay()) {
            $data->{'unread_count_display'} = $object->getUnreadCountDisplay();
        }
        foreach ($object as $key => $value_4) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value_4;
            }
        }

        return $data;
    }
}
