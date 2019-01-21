<?php
class GroupNumber
{
    public function getGroupNumber($group)
    {
        //return $group;
        $num = array();
        for($i=1;$i<=500;$i++) {
            if ($i % $group == 0 && $group == 20) {
                array_push($num, $i);
            }
            else if ($i % $group == 0 && $i % 20 && $group == 15) {
                array_push($num, $i);
            }
            else if ($i % $group == 0 && $i % 20 && $i % 15 && $group == 9) {
                array_push($num, $i);
            }
            else if ($i % $group == 0 && $i % 20 && $i % 15 && $i % 9 && $group == 5) {
                array_push($num, $i);
            }
            else if ($i % $group == 0 && $i % 20 && $i % 15 && $i % 9 && $i % 5 && $group == 3) {
                array_push($num, $i);
            }
        }
        return $num;
    }
}

$group_number = new GroupNumber();
$group_20 = $group_number->getGroupNumber(20);
$group_15 = $group_number->getGroupNumber(15);
$group_9 = $group_number->getGroupNumber(9);
$group_5 = $group_number->getGroupNumber(5);
$group_3 = $group_number->getGroupNumber(3);

echo 'Group#20: '.implode(',', $group_20).'<br/>';
echo 'Group#15: '.implode(',', $group_15).'<br/>';
echo 'Group#9: '.implode(',', $group_9).'<br/>';
echo 'Group#5: '.implode(',', $group_5).'<br/>';
echo 'Group#3: '.implode(',', $group_3).'<br/>';
?>