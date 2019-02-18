<?php
class week{
    //区间的水仙花数
    public function hua($str,$end){
        for ($i=$str;$i<=$end;$i++){
            $len=strlen($i);
            if($len!=3){
                return "水仙花数必须是一个三位数的";
            }
            $h=intval($i/100);
            $s=intval($i%100/10);
            $g=$i%10;
            $sum=$h*$h*$h+$s*$s*$s+$g*$g*$g;
            if($sum==$i){
                return $i;
            }
        }
    }

    //首先出现三次英文字母
    public function third($str){
        $len=strlen($str);
        for ($i=0;$i<=$len;$i++){
            $str2=substr($str,$i,$i+1);
            $sum=substr_count($str,$str2);
            if ($sum>=3){
                return $str2;
            }
        }
    }

    //判断是个是回文字符串
    public function ishuwen($str){
        $len=strlen($str);
        $l=1;
        $k=intval($len/2)+1;
        for ($j=1;$j<$k;$j++){
            if (substr($str,$j,1)!=substr($str,$len-$j-1,1)){
                $l=0;
                break;
            }
        }
        if($l==1){
            return "是回文字符串";
        }else{
            return "不是回文字符串";
        }
    }

    //斐波那契数列
    public function feibo($n){
        $str[1]=$str[2]=1;
        for ($i=3;$i<=$n;$i++){
            $str[$i]=$str[$i-1]+$str[$i-2];
        }
        return $str;
    }

    //传入一个十进制数字，返回数字对应的英文字母
    public function ten($n){
        $str= range('a','z');
        $num= range(1,1000);
        $l=1;
        for ($i=1;$i<=1000;$i++){
            $num[$i]=$str[($i-1)%25];
            if($i>25){
                $num[$i]=$str[($i-1)%25].$str[($i-1)%25];
            }
        }
        return $num[$n];
    }

    //n节台阶
    public function taijie($n){
        $s1=$n/1;
        $s2=intval($n/2)+1;
        return $s1+$s2;
    }
}
$class=new week();
//echo $class->hua(100,990);
//echo $class->third("aaaabbb");
//echo $class->ishuwen("aabaab");
//print_r($class->feibo(10));
//echo $class->ten(26);
echo $class->taijie(2);