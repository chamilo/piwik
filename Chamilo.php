<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\Chamilo;

class Chamilo extends \Piwik\Plugin
{
    /**
     * Get the course code from the URL
     * @param   string  $url    The URL loaded by the user
     * @return  mixed (matched string)
     */
    public function getCourseCode($url) {
        $matches = array();
        $match = preg_match('#&cidReq=(^&)*', $url, $matches);
        if (!$match) {
            return null;
        } else {
            return $matches[1];
        }
    }
}
