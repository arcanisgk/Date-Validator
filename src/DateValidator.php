<?php

/**
 * DateValidator - Date Validator in PHP Development Environments.
 * PHP Version required 7.4.* or higher
 * This example shows how the DateValidator class and its function/methods are declared.
 *
 * @see https://github.com/arcanisgk/WEB-CLI-Detector
 *
 * @author    Walter Nuñez (arcanisgk/original founder)
 * @email     icarosnet@gmail.com
 * @copyright 2020 - 2022 Walter Nuñez.
 * @license   http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 * @note      This program is distributed in the hope that it will be useful
 *            WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 *            or FITNESS FOR A PARTICULAR PURPOSE.
 */

declare(strict_types=1);

namespace IcarosNet\DateValidator;

use DateTime;
use Exception;

/**
 * Description: Class DateValidator.
 * @package IcarosNet\DateValidator
 */
class DateValidator
{
    private const FORMATS = [
        'A' => 'd/m/Y h:i A',
        'B' => 'd/m/Y H:i',
        'C' => 'd/m/Y h:i:s A',
        'D' => 'd/m/Y H:i:S',
        'E' => 'd-m-Y h:i A',
        'F' => 'd-m-Y H:i',
        'G' => 'd-m-Y h:i:s A',
        'H' => 'd-m-Y H:i:S',
    ];

    public array $new_format = [];

    /**
     * @param string $new_format
     */
    public function setNewFormat(string $new_format): void
    {
        $this->new_format[] = $new_format;
    }

    public function getFormats(): array
    {
        return $this::FORMATS;
    }

    /**
     * @return array
     */
    public function getNewFormat(): array
    {
        return $this->new_format;
    }



    public function addFormat(string $pattern){
        try{
            if(date($pattern, strtotime('2011-01-07'))!==false && !in_array($pattern,$this->getFormats(),true)){
                $this->setNewFormat($pattern);
            }
        } catch (Exception $e){
            echo $e->getMessage();
            return false;
        }
        return $this;
    }

    public function ValidateDate(string $date) : bool
    {
        foreach(array_merge($this->getFormats(),$this->getNewFormat()) as $key => $pattern){

            $d = DateTime::createFromFormat($pattern, $date);
            if($d && $d->format($pattern) === $date){
                return true;
            }
        }
        return false;
    }

    function FormatDate($date){
        return date('Y-m-d H:i:s', strtotime($date));
    }
}