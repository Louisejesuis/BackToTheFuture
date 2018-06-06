<?php
/**
 * Created by PhpStorm.
 * User: louise
 * Date: 04/06/18
 * Time: 14:02
 */

class TimeTravel
{
    /**
     * @var DateTime
     */
    private $start;

    /**
     * @var DateTime
     */
    private $end;

    public function getTravelInfo()
    {
        $diff = $this->start->diff($this->end);
        foreach ($diff as $key => $value) {
            $ecart[$key] = $value;
        }
        return 'Il y a '
            . $ecart['y'] . ' années, '
            . $ecart['m'] . ' mois, '
            . $ecart['d'] . ' jours, '
            . $ecart['h'] . ' heures, '
            . $ecart['i'] . ' minutes et '
            . $ecart['s'] . ' secondes entre les deux dates';
    }

    public function findDate(DateInterval $interval): DateTime
    {
        $date = $this->start->sub($interval);
        return $date;
    }

    /**
     * @param $step
     * @return array
     */
    public function backToFutureStepByStep($step)
    {
        $result = [];

        $dates = new DatePeriod($this->start, $step, $this->end);
        foreach ($dates as $date) {
            echo '<li/>' .  $date->format( " M d Y A h:m ") . '<br/>';
        }
    }

    /**
     * TimeTravel constructor.
     * @param DateTime $start
     * @param DateTime $end
     */
    public function __construct(DateTime $start, DateTime $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * @return DateTime
     */
    public function getStart(): DateTime
    {
        return $this->start;
    }

    /**
     * @param DateTime $start
     */
    public function setStart(DateTime $start): void
    {
        $this->start = $start;
    }

    /**
     * @return DateTime
     */
    public function getEnd(): DateTime
    {
        return $this->end;
    }

    /**
     * @param DateTime $end
     */
    public function setEnd(DateTime $end): void
    {
        $this->end = $end;
    }


}