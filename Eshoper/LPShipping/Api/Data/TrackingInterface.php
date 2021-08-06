<?php
/**
 * @package    Eshoper/LPShipping/Model/Api/Data
 * @author     MB "Eshoper" <pagalba@eshoper.lt>
 * @copyright  AB Lietuvos paštas. All rights reserved.
 * @version    1.0.0
 * @since      File available since Release 1.0.0
 */
namespace Eshoper\LPShipping\Api\Data;


interface TrackingInterface
{
    const TRACKING_CODE = 'tracking_code';
    const STATE = 'state';
    const EVENTS = 'events';

    /**
     * @return int
     */
    public function getId ();

    /**
     * @param int $id
     * @return int
     */
    public function setId ( $id );

    /**
     * @return string
     */
    public function getTrackingCode ();

    /**
     * @param string $trackingCode
     * @return string
     */
    public function setTrackingCode ( $trackingCode );

    /**
     * @return string
     */
    public function getStateCode ();

    /**
     * @param string $stateCode
     * @return string
     */
    public function setStateCode ( $stateCode );

    /**
     * @return string
     */
    public function getEvents ();

    /**
     * @param string $events
     * @return string
     */
    public function setEvents ( $events );
}
