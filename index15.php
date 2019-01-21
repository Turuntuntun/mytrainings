<meta charset = 'utf-8'>
<?php 
  $str = 'ahb acb aeb aeeb adcb axeb';
  echo preg_replace( '&a.b&', '!', $str)."<br>";
  echo preg_replace( '&a..a&', '!', 'aba aca aea abba adca abea')."<br>";
  echo preg_replace( '&ab.a&', '!', 'aba aca aea abba adca abea')."<br>";
  echo preg_replace( '&ab+a&', '!', 'aa aba abba abbba abca abea')."<br>";
  echo preg_replace( '&ab*a&', '!', 'aa aba abba abbba abca abea')."<br>";
  echo preg_replace( '&ab?a&', '!', 'aa aba abba abbba abca abea')."<br>";
  echo preg_replace( '&(ab)+&', '!', 'ab abab abab abababab abea')."<br>";
  echo preg_replace( '&a\.a&', '!', 'a.a aba aea')."<br>";
  echo preg_replace( '&2\+3&', '!', '2+3 223 2223')."<br>";
  echo preg_replace( '&2\++3&', '!', '23 2+3 2++3 2+++3 345 567')."<br>";
  echo preg_replace( '&2\+*3&', '!', '23 2+3 2++3 2+++3 445 677')."<br>";
  echo preg_replace( '&\*q+\+&', '!', '*+ *q+ *qq+ *qqq+ *qqq qqq+')."<br>";
  echo preg_replace( '&\*q*\+&', '!', '*+ *q+ *qq+ *qqq+ *qqq qqq+')."<br>";
  echo preg_replace( '&a.+?a&', '!', 'aba accca azzza wwwwa')."<br>";
  echo preg_replace( '&ab{2,4}a&', '!', 'aa aba abba abbba abbbba abbbbba')."<br>";
  echo preg_replace( '&ab{0,3}a&', '!', 'aa aba abba abbba abbbba abbbbba')."<br>";
  echo preg_replace( '&ab{4,}a&', '!', 'aa aba abba abbba abbbba abbbbba')."<br>";
  echo preg_replace( '&a\da&', '!', 'a1a a2a a3a a4a a5a aba aca')."<br>";
  echo preg_replace( '&a\d*a&', '!', 'a1a a22a a333a a4444a a55555a aba aca')."<br>";
  echo preg_replace( '&a\d*a&', '!', 'aa a1a a22a a333a a4444a a55555a aba aca')."<br>";
  echo preg_replace( '&a\Db&', '!', 'avb a1b a2b a3b a4b a5b abb acb')."<br>";
  echo preg_replace( '&a\Wb&', '!', 'ave a#b a2b a$b a4b a5b a-b acb')."<br>";
  echo preg_replace( '&\s&', '!', 'ave a#a a2a a$a a4a a5a a-a aca')."<br>";
  echo preg_replace( '&a[xeb]a&', '!', 'aba aea aca aza axa')."<br>";
  echo preg_replace( '&a[1-7]a&', '!', 'aba aea aca aza axa')."<br>";	
  echo preg_replace( '&a[b+.*]a&', '!', 'aba aea aca aza axa a.a a+a a*a')."<br>";
  echo preg_replace( '&a[a-fg-z]a&', '!', 'aba aea aca aza axa a.a a+a a*a')."<br>";
  echo preg_replace( '&a[a-fA-Z]a&', '!', 'aba aea aca aza axa a.a a+a a*a')."<br>";
  echo preg_replace( '&a[^ex\s]a&', '!', 'aba aea aca aza axa a-a a#a')."<br>";
  echo preg_replace( '&w[а-яА-ЯёЁ]w&u', '!', 'wйw wяw wёw wqw')."<br>";
  echo preg_replace( '&a[a-z]+a&', '!', 'aAXa aeffa aGha aza ax23a a3sSa')."<br>";
  echo preg_replace( '&a[a-zA-Z]+a&', '!', 'aAXa aeffa aGha aza ax23a a3sSa')."<br>";
  echo preg_replace( '&a[a-z0-9]+a&', '!', 'aAXa aeffa aGha aza ax23a a3sSa')."<br>";
  echo preg_replace( '&[а-яА-ЯёЁ]+&u', '!', 'ааа ббб ёёё ззз ййй ААА БББ ЁЁЁ ЗЗЗ ЙЙЙ')."<br>";
  echo preg_replace( '&^a+&', '!', 'aaa aaa aaa')."<br>";
  echo preg_replace( '&a+$&', '!', 'aaa aaa aaa')."<br>";
  echo preg_replace( '&ae+a|ax+a&', '!', 'aeeea aeea aea axa axxa axxxa axea')."<br>";
  echo preg_replace( '&aeea|ax+a&', '!', 'aeeea aeea aea axa axxa axxxa axea')."<br>";
  echo preg_replace( '&\b&', '!', 'xbx aca aea abba adca abea')."<br>";
  echo preg_replace( '&a\\\\a&', '!', 'a\a abc')."<br>";
  echo preg_replace( '&a\\\\{3}a&', '!', 'a\a a\\a a\\\a')."<br>";
  echo preg_replace( '&/[a-z]+\\\\&', '!', 'bbb /aaa\ bbb /ccc\ ')."<br>";
  echo preg_replace( '&<b>(.+?)</b>&', '!', 'bbb <b> hello </b>, <b> world </b> eee')."<br>";
  echo preg_replace( '&([a-z0-9]+)@([a-z0-9]+)&', '$2@$1', 'aaa@bbb eee7@kkk')."<br>";
  echo preg_replace( '&\d&', '$0$0', 'a1b2c3')."<br>";
  echo preg_replace( '&([a-z\d])\1&', '!', 'aae xxz 33a')."<br>";
  echo preg_replace( '&([a-z\d])\1+&', '!', 'aaa bcd xxx efg')."<br>";
  echo preg_match('&^[a-z0-9_.-]+@[a-z_.-]+\.[a-z]{2,}$&','mymail@mail.ru');
  echo preg_match_all('&[a-z0-9_.-]+@[a-z_.-]+\.[a-z]{2,}&','mymail@mail.ru my-mail@mail.ru mail@mail.com sjsajasj jasaa mail@yandex.ru', $z)."<br>";
  echo preg_match('&^[a-z0-9_.-]+\.[a-z]{2,}$&','site.ru').'<br>';
  echo preg_match('&^[a-z0-9_.-]+\.[a-z0-9_.-]+\.[a-z]{2,}$&','hello.my-site.com').'<br>';
  echo preg_match('&^https?://[a-z0-9_.-]+\.[a-z]{2,}$&','https://site.ru').'<br>';
  echo preg_match('&^https?://[a-z0-9_.-]+\.[a-z]{2,}/?$&','http://site.ru/').'<br>';
  echo preg_match('&^https?&','http://site.ru/').'<br>';
  echo preg_match('&\.(txt|php|html)$&','1.php').'<br>';
  echo preg_match('&\.jpe?g$&','1.html').'<br>';
  echo preg_match('&^[0-9]{0,12}$&','1234').'<br>';
  echo preg_match('&\.(txt|php|html)$&','1.php').'<br>';
  echo preg_match_all('&\d+&','sjasjsa  1313 nsanas as 213 sa',$f).'<br>';
  echo array_sum($f[0])."<br>";
  echo preg_replace( '&(\d{2})-(\d{2})-(\d{4})&', '$3.$2.$1', '31-12-2014')."<br>";
  echo preg_replace( '&^(https?://)([a-z]+\.[a-z]{2,})$&', '<a href="$1$2">$2</a>', 'http://site.ru')."<br>";
  echo preg_replace( '&(?<=b)aaa&', '!', 'baaa vaaa zaaa yaaa')."<br>";
  echo preg_replace( '&(?<!b)aaa&', '!', 'baaa vaaa zaaa yaaa')."<br>";
  echo preg_replace( '&aaa(?=b)&', '!', 'aaab aaav aaae aaaz')."<br>";
  echo preg_replace( '&aaa(?!b)&', '!', 'aaab aaav aaae aaaz')."<br>";
  echo preg_replace( '&(?<!\*)\*(?!\*)&', '!', 'aaa * bbb ** eee * **')."<br>";
  echo preg_replace( '&(?<!\*)\*\*(?!\*)&', '!', 'aaa * bbb ** eee *** kkk ****')."<br>";
  echo preg_replace( '&([a-z])(?=\1)&', '!', 'aabbccdefffgh')."<br>";
  echo preg_replace( '&(?<=([a-z]))\1&', '!', 'aabbccdefffgh')."<br>";
  echo preg_replace_callback('#(\d)#', 'kvad', '1 4 5 8 9 13 25')."<br>";
 	function kvad($matches)
	{   
		$result = '';
		$result .= $matches[1] * $matches[1];
		return $result;
 	}
   echo preg_replace_callback('#(?<=\')(\d)(?=\')#', 'ud', "2aaa'6'bbb'8'")."<br>";
 	function ud($num){
 		return 2*$num[1];
 	}
?>