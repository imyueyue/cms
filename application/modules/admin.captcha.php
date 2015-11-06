<?php

defined ( 'SYSPATH' ) or die ( 'No direct script access.' );

//code class
class ValidateCode {
	private $charset = 'abcdefghkmnprstuvwxyzABCDEFGHKMNPRSTUVWXYZ23456789';    //random effects
	private $code;              //code
	private $codelen = 4 ;      //code length
	private $width = 100;       //width
	private $heigth = 40;       //height
	private $img;               //image handle
	private $font;              //font file
	private $fontsize = 20;          //font size
	private $fontcolor;         //font color

	public static function instance(){
		return new ValidateCode();
	}
	
	//the construct initialization
	public function __construct(){
		$this->font ='./media/fonts/Inconsolata.ttf'; //ROOT_PATH.'media/fonts/Inconsolata.ttf';
	}

	//create random code from $charset
	private function createCode(){
		$_len = strlen($this->charset);
		for($i=1;$i<=$this->codelen;$i++){
			$this->code .= $this->charset[mt_rand(0,$_len)];
		}
	}

	//create background
	private function createBg(){
		$this->img = imagecreatetruecolor($this->width, $this->heigth);
		$_color = imagecolorallocate($this->img, mt_rand(157,255), mt_rand(157,255), mt_rand(157,255));
		imagefilledrectangle($this->img,0,0,$this->width,$this->heigth,$_color);
	}

	//create font
	private function createFont(){
		$_x = $this->width / $this->codelen;
		for($i=0;$i<$this->codelen;$i++){
			$this->fontcolor = imagecolorallocate($this->img, mt_rand(0,156),  mt_rand(0,156),  mt_rand(0,156));
			imagettftext($this->img, $this->fontsize, mt_rand(-30,30), $_x*$i+mt_rand(1,5), $this->heigth/1.4, $this->fontcolor, $this->font, $this->code[$i]);
		}
	}

	//create line,snowflake
	private function createLine(){
		for($i=0;$i<6;$i++){
			$_color = imagecolorallocate($this->img, mt_rand(0,156),  mt_rand(0,156),  mt_rand(0,156));
			imageline($this->img, mt_rand(0,$this->width), mt_rand(0, $this->heigth),mt_rand(0,$this->width), mt_rand(0, $this->heigth), $_color);
		}
		for($i=0;$i<100;$i++){
			$_color = imagecolorallocate($this->img, mt_rand(157,255), mt_rand(157,255), mt_rand(157,255));
			imagestring($this->img, mt_rand(1, 5), mt_rand(0,$this->width), mt_rand(0,$this->heigth), '*', $_color);
		}
	}

	//export image
	private function outPut(){
		header('Content-type:image/png');
		imagepng($this->img);
		imagedestroy($this->img);
	}

	//display
	public function doimg(){
		$this->createBg();
		$this->createCode();
		$this->createLine();
		$this->createFont();
		$this->outPut();
	}

	//get code
	public function getCode(){
		return strtolower($this->code);
	}


}


class SimpleCaptcha {
	public $width = 80;
	public $height = 30;
	public $wordsFile = 'words/es.php';
	public $resourcesPath = 'resources';
	public $minWordLength = 4;
	public $maxWordLength = 4;
	public $session_var = 'captcha';
	public $backgroundColor = array (
			255,
			255,
			255 
	);
	public $colors = array (
			array (
					27,
					78,
					181 
			), // blue
			array (
					22,
					163,
					35 
			), // green
			array (
					214,
					36,
					7 
			) 
	) // red
;
	public $shadowColor = null; // array(0, 0, 0);
	public $fonts = array (
			// 'Antykwa' => array('spacing' => -3, 'minSize' => 27, 'maxSize' => 30, 'font' => 'AntykwaBold.ttf'),
			// 'Candice' => array('spacing' =>-1.5,'minSize' => 28, 'maxSize' => 31, 'font' => 'Candice.ttf'),
			// 'DingDong' => array('spacing' => -2, 'minSize' => 24, 'maxSize' => 30, 'font' => 'Ding-DongDaddyO.ttf'),
			// 'Duality' => array('spacing' => -2, 'minSize' => 30, 'maxSize' => 38, 'font' => 'Duality.ttf'),
			// 'Heineken' => array('spacing' => -2, 'minSize' => 24, 'maxSize' => 34, 'font' => 'Heineken.ttf'),
			// 'Jura' => array('spacing' => -2, 'minSize' => 28, 'maxSize' => 32, 'font' => 'Jura.ttf'),
			// 'StayPuft' => array('spacing' =>-1.5,'minSize' => 28, 'maxSize' => 32, 'font' => 'StayPuft.ttf'),
			'Times' => array (
					'spacing' => - 2,
					'minSize' => 28,
					'maxSize' => 34,
					'font' => 'media/Inconsolata.ttf' 
			) 
	)
	// 'VeraSans' => array('spacing' => -1, 'minSize' => 20, 'maxSize' => 28, 'font' => 'VeraSansBold.ttf'),
	;
	public $Yperiod = 12;
	public $Yamplitude = 14;
	public $Xperiod = 11;
	public $Xamplitude = 5;
	public $maxRotation = 8;
	public $scale = 2;
	public $blur = false;
	public $debug = false;
	public $imageFormat = 'jpeg';
	
	/**
	 * GD image
	 */
	public $im;
	
	public static function instance(){
		return new SimpleCaptcha();
	}
	
	public function __construct($config = array()) {
		//parent::__construct ();
		// $preUrl = $_SERVER['HTTP_REFERER'];echo $preUrl;exit;
	}
	public function index() {
		$this->CreateImage ();
	}
	public function CreateImage() {
		$ini = microtime ( true );
		
		/**
		 * Initialization
		 */
		$this->ImageAllocate ();
		
		/**
		 * Text insertion
		 */
		$text = $this->GetCaptchaText ();
		// $fontcfg = $this->fonts[array_rand($this->fonts)];
		$fontcfg = NULL;
		$this->WriteText ( $text, $fontcfg );
		
		//$this->load->library ( 'session' );
		session_start();
	    $_SESSION[$this->session_var] = $text;
		//$this->session->set_userdata ( $this->session_var, $text );
		
		/**
		 * Transformations
		 */
		// $this->WaveImage();
		if ($this->blur && function_exists ( 'imagefilter' )) {
			imagefilter ( $this->im, IMG_FILTER_GAUSSIAN_BLUR );
		}
		$this->ReduceImage ();
		
		if ($this->debug) {
			imagestring ( $this->im, 1, 1, $this->height - 8, "$text {$fontcfg['font']} " . round ( (microtime ( true ) - $ini) * 1000 ) . "ms", $this->GdFgColor );
		}
		
		/**
		 * Output
		 */
		$this->WriteImage ();
		$this->Cleanup ();
	}
	
	/**
	 * Creates the image resources
	 */
	protected function ImageAllocate() {
		// Cleanup
		if (! empty ( $this->im )) {
			imagedestroy ( $this->im );
		}
		
		$this->im = imagecreatetruecolor ( $this->width * $this->scale, $this->height * $this->scale );
		
		// Background color
		$this->GdBgColor = imagecolorallocate ( $this->im, $this->backgroundColor [0], $this->backgroundColor [1], $this->backgroundColor [2] );
		imagefilledrectangle ( $this->im, 0, 0, $this->width * $this->scale, $this->height * $this->scale, $this->GdBgColor );
		
		// Foreground color
		$color = $this->colors [mt_rand ( 0, sizeof ( $this->colors ) - 1 )];
		$this->GdFgColor = imagecolorallocate ( $this->im, $color [0], $color [1], $color [2] );
		
		// Shadow color
		if (! empty ( $this->shadowColor ) && is_array ( $this->shadowColor ) && sizeof ( $this->shadowColor ) >= 3) {
			$this->GdShadowColor = imagecolorallocate ( $this->im, $this->shadowColor [0], $this->shadowColor [1], $this->shadowColor [2] );
		}
	}
	
	/**
	 * Text generation
	 *
	 * @return string Text
	 */
	protected function GetCaptchaText() {
		// $text = $this->GetDictionaryCaptchaText();
		// if (!$text) {
		$text = $this->GetRandomCaptchaText (); // 随机字
		                                       // }
		return $text;
	}
	
	/**
	 * Random text generation
	 *
	 * @return string Text
	 */
	protected function GetRandomCaptchaText($length = null) {
		if (empty ( $length )) {
			$length = rand ( $this->minWordLength, $this->maxWordLength );
		}
		
		$words = "abcdefghijlmnpqrstvwyzABCDEFGHIJKLMNPQRSTUVWXYZ";
		$vocals = "123456789";
		
		$wordsCount = strlen ( $words ) - 1;
		$vocalsCount = strlen ( $vocals ) - 1;
		
		$text = "";
		$vocal = rand ( 0, 1 );
		for($i = 0; $i < $length; $i ++) {
			if ($vocal) {
				$text .= substr ( $vocals, mt_rand ( 0, $vocalsCount ), 1 );
			} else {
				$text .= substr ( $words, mt_rand ( 0, $wordsCount ), 1 );
			}
			$vocal = ! $vocal;
		}
		return $text;
	}
	
	/**
	 * Random dictionary word generation
	 *
	 * @param boolean $extended
	 *        	Add extended "fake" words
	 * @return string Word
	 */
	function GetDictionaryCaptchaText($extended = false) {
		if (empty ( $this->wordsFile )) {
			return false;
		}
		
		// Full path of words file
		if (substr ( $this->wordsFile, 0, 1 ) == '/') {
			$wordsfile = $this->wordsFile;
		} else {
			$wordsfile = $this->resourcesPath . '/' . $this->wordsFile;
		}
		
		$fp = fopen ( $wordsfile, "r" );
		$length = strlen ( fgets ( $fp ) );
		if (! $length) {
			return false;
		}
		$line = rand ( 1, (filesize ( $wordsfile ) / $length) - 2 );
		if (fseek ( $fp, $length * $line ) == - 1) {
			return false;
		}
		$text = trim ( fgets ( $fp ) );
		fclose ( $fp );
		
		/**
		 * Change ramdom volcals
		 */
		if ($extended) {
			$text = preg_split ( '//', $text, - 1, PREG_SPLIT_NO_EMPTY );
			$vocals = array (
					'a',
					'e',
					'i',
					'o',
					'u' 
			);
			foreach ( $text as $i => $char ) {
				if (mt_rand ( 0, 1 ) && in_array ( $char, $vocals )) {
					$text [$i] = $vocals [mt_rand ( 0, 4 )];
				}
			}
			$text = implode ( '', $text );
		}
		
		return $text;
	}
	
	/**
	 * Text insertion
	 */
	protected function WriteText($text, $fontcfg = array()) {
		if (empty ( $fontcfg )) {
			// Select the font configuration
			$fontcfg = $this->fonts [array_rand ( $this->fonts )];
		}
		
		// Full path of font file
		// 自己
		// $fontcfg['font'] = "AntykwaBold.ttf.ttf"
		
		// $fontfile = $this->resourcesPath.'/fonts/'.$fontcfg['font'];
		$fontfile = "./media/fonts/Inconsolata.ttf";
		
		/**
		 * Increase font-size for shortest words: 9% for each glyp missing
		 */
		$lettersMissing = $this->maxWordLength - strlen ( $text );
		$fontSizefactor = 1 + ($lettersMissing * 0.09);
		
		// Text generation (char by char)
		$x = 20 * $this->scale;
		$y = round ( ($this->height * 27 / 40) * $this->scale );
		$length = strlen ( $text );
		
		// test
		// $degree = rand($this->maxRotation*-1, $this->maxRotation);
		// $degree = 0;
		// $fontsize = rand($fontcfg['minSize'], $fontcfg['maxSize'])*$this->scale*$fontSizefactor;
		// $letter = substr($text, $i, 1);
		
		for($i = 0; $i < $length; $i ++) {
			$degree = rand ( $this->maxRotation * - 1, $this->maxRotation );
			// 字体大小
			// $fontsize = rand($fontcfg['minSize'], $fontcfg['maxSize'])*$this->scale*$fontSizefactor;
			$fontsize = 36;
			$letter = substr ( $text, $i, 1 );
			
			if ($this->shadowColor) { // echo 1;
				$coords = imagettftext ( $this->im, $fontsize, $degree, $x + $this->scale, $y + $this->scale, $this->GdShadowColor, $fontfile, $letter );
			}
			$coords = imagettftext ( $this->im, $fontsize, $degree, $x, $y, $this->GdFgColor, $fontfile, $letter );
			$x += ($coords [2] - $x) + ($fontcfg ['spacing'] * $this->scale);
		}
	}
	
	/**
	 * Wave filter
	 */
	protected function WaveImage() {
		// X-axis wave generation
		$xp = $this->scale * $this->Xperiod * rand ( 1, 3 );
		$k = rand ( 0, 100 );
		for($i = 0; $i < ($this->width * $this->scale); $i ++) {
			imagecopy ( $this->im, $this->im, $i - 1, sin ( $k + $i / $xp ) * ($this->scale * $this->Xamplitude), $i, 0, 1, $this->height * $this->scale );
		}
		
		// Y-axis wave generation
		$k = rand ( 0, 100 );
		$yp = $this->scale * $this->Yperiod * rand ( 1, 2 );
		for($i = 0; $i < ($this->height * $this->scale); $i ++) {
			imagecopy ( $this->im, $this->im, sin ( $k + $i / $yp ) * ($this->scale * $this->Yamplitude), $i - 1, 0, $i, $this->width * $this->scale, 1 );
		}
	}
	
	/**
	 * Reduce the image to the final size
	 */
	protected function ReduceImage() {
		// Reduzco el tamaño de la imagen
		$imResampled = imagecreatetruecolor ( $this->width, $this->height );
		imagecopyresampled ( $imResampled, $this->im, 0, 0, 0, 0, $this->width, $this->height, $this->width * $this->scale, $this->height * $this->scale );
		imagedestroy ( $this->im );
		$this->im = $imResampled;
	}
	
	/**
	 * File generation
	 */
	protected function WriteImage() {
		//print_r($this->im);
		if ($this->imageFormat == 'png' && function_exists ( 'imagepng' )) {
			header ( "Content-type: image/png" );
			imagepng ( $this->im );
		} else {
			header ( "Content-type: image/jpeg" );
			imagejpeg ( $this->im, null, 80 );
		}
	}
	
	/**
	 * Cleanup
	 */
	protected function Cleanup() {
		imagedestroy ( $this->im );
	}
}
/*前端代码如下

<a href="#" onclick="document.getElementById('captcha').src='<?php echo base_url();?>simplecaptcha?'+Math.random();"
		id="change-image"><img src="<?php echo site_url();?>/simplecaptcha" id="captcha" /></a>
*/