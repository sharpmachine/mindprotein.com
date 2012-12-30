<?php
class SocialCounter {
    
    public $url;
    private $twitter_count;
    private $fbLike_count;
    private $fbShare_count;
    private $fbTotal_count;
    private $g_count;
    private $gBuzz_count;
    private $digg_count;
    private $stumbleViews_count;
    private $delicious_count;
    private $linkedIn_count;

    /**
     *
     * @param string $url Pass in the URL to check stats for
     */
    public function __construct($url) {
        $this->url = trim($url);
    }

        /**
         *
         * @param string $newURL Pass in a NEW url, if you wish to get statistics regarding a new URL
         */
	public function changeURL($newURL){
		$this->url = trim($newURL);
        $this->twitter_count = null;
        $this->fbLike_count = null;
        $this->fbShare_count = null;
        $this->fbTotal_count = null;
        $this->digg_count = null;
        $this->stumbleViews_count = null;
        $this->delicious_count = null;
        $this->gBuzz_count = null;
        $this->linkedIn_count = null;

		// Only run if cURL is installed
		if (function_exists('curl_init')){
			$this->g_count = null;
		}else{
			$this->g_count = "0";
		}
    }
	

    /**
     *
     * @return int Returns amount of tweets
     */
    public function getTweets() {
        if(empty($this->twitter_count)){
            $json = file_get_contents("http://urls.api.twitter.com/1/urls/count.json?url=" . $this->url);
            $json = json_decode($json, true);

            $this->twitter_count = $json['count'];

            return $json['count'];
        }
        else
        {
            return $this->twitter_count;
        }
    }

    /**
     *
     * @return int Returns amount of facebook likes
     */
    public function getFBLikes() {
        if(empty($this->fbLike_count)){
            $json = file_get_contents("https://api.facebook.com/method/fql.query?query=select%20like_count%20from%20link_stat%20where%20url=%22" . $this->url . "%22&format=json");
            $json = json_decode($json, true);

            $this->fbLike_count = $json[0]['like_count'];
            return $json[0]['like_count'];
        }
        else{
            $this->fbLike_count;
        }
    }

    /**
     *
     * @return int Returns amount of facebook shares
     */
    public function getFBShares() {
        if(empty($this->fbShare_count)){
            $json = file_get_contents("https://api.facebook.com/method/fql.query?query=select%20share_count%20from%20link_stat%20where%20url=%22" . $this->url . "%22&format=json");
            $json = json_decode($json, true);

            $this->fbShare_count = $json[0]['share_count'];
            return $json[0]['share_count'];
        }
        else
        {
            return $this->fbShare_count;
        }
    }
	 
	/**
     *
     * @return int Returns amount of total facebook interactions
     */
	public function getFBTotal() {
       if(empty($this->fbTotal_count)){
            $json = file_get_contents("https://api.facebook.com/method/fql.query?query=select%20total_count%20from%20link_stat%20where%20url=%22" . $this->url . "%22&format=json");
            $json = json_decode($json, true);

            $this->fbTotal_count = $json[0]['total_count'];
            return $json[0]['total_count'];
        }
        else
        {
            return $this->fbTotal_count;
        }
    }


    /**
     *
     * @return int Returns amount of Google +1's, uses private API because there is no public
     */
    public function getPlusOne() {
        if(empty($this->g_count)){
            if(function_exists('curl_init')){
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://clients6.google.com/rpc?key=AIzaSyCKSbrvQasunBoV16zDH9R33D88CeLr9gQ");
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, '[{"method":"pos.plusones.get","id":"p","params":{"nolog":true,"id":"' . $this->url . '","source":"widget","userId":"@viewer","groupId":"@self"},"jsonrpc":"2.0","key":"p","apiVersion":"v1"}]');

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
                $json = curl_exec($ch);
                curl_close($ch);

                $json = json_decode($json, true);
        		if(!isset($json[0]['result']['metadata']['globalCounts']['count'])){
        			$json[0]['result']['metadata']['globalCounts']['count'] = "0";
        		}
        		
                $this->g_count = $json[0]['result']['metadata']['globalCounts']['count'];
                return $json[0]['result']['metadata']['globalCounts']['count'];
            }
            else
            {
                $this->g_count = 0;
                return 0;
            }
        }
        else
        {
            return $this->g_count;
        }
    }
    
    /**
     *
     * @return int Returns amount of Diggs
     */
    public function getDiggs() {
        if(empty($this->digg_count)){
            $json = file_get_contents("http://services.digg.com/1.0/endpoint?method=story.getAll&link=". $this->url ."&type=javascript&callback=?");
    		$json = substr($json,2,-2);
            $json = json_decode($json, true);
    		if(!isset($json['stories']['0']['diggs'])){
    			return $json['stories']['0']['diggs'] = "0";
    		}

            $this->digg_count = $json['stories']['0']['diggs'];
            return $json['stories']['0']['diggs'];
        }
        else
        {
            return $this->digg_count;
        }
    }
	
	/**
     *
     * @return int Returns amount of views on StumbleUpon
     */
    public function getStumbleViews(){
        if(empty($this->stumbleViews_count)){
            $json = file_get_contents("http://www.stumbleupon.com/services/1.01/badge.getinfo?url=".$this->url);
            $json = json_decode($json, true);
    		if(!isset($json['result']['views'])){
    			$json['result']['views'] = "0";
    		}

            $this->stumbleViews_count = $json['result']['views'];
            return $json['result']['views'];
        }
        else
        {
            return $this->stumbleViews_count;
        }
    }

    /**
     *
     * @return int Returns amount of delicious bookmarks
     */
    public function getDelicious(){

        if(empty($this->delicious_count)){
            $json = file_get_contents("http://feeds.delicious.com/v2/json/urlinfo/".md5($this->url));
            $json = json_decode($json, true);
    		if(!isset($json['0']['total_posts'])){
    			$json['0']['total_posts'] ="0";
    		}
            $this->delicious_count = $json['0']['total_posts'];
            return $json['0']['total_posts'];
        }
        else
        {
            return $this->delicious_count;
        }
    }

    /**
     *
     * @return int Returns amount of Google Buzz mentions
     */
    public function getGBuzz(){
        if(empty($this->gBuzz_count)){
            $json = file_get_contents("https://www.googleapis.com/buzz/v1/activities/count?key=AIzaSyCKSbrvQasunBoV16zDH9R33D88CeLr9gQ&alt=json&url=".$this->url);
            $json = json_decode($json, true);

            // Bug in Google Buzz API
            if($json['data']['counts'][$this->url]['0']['count'] == "18446744073709551615"){
                $json['data']['counts'][$this->url]['0']['count'] = 0;
            }

            $this->gBuzz_count = $json['data']['counts'][$this->url]['0']['count'];
            return $json['data']['counts'][$this->url]['0']['count'];   
        }
        else
        {
            return $this->gBuzz_count;
        }
    }

	/**
	 *
	 * @return int Returns amount of LinkedIn shares
	 */
	public function getLinkedIn(){

        if(empty($this->linkedIn_count)){
    	    $json = file_get_contents("http://www.linkedin.com/countserv/count/share?url=".urlencode($this->url));
    		$json = substr($json,26,-2);
    	    $json = json_decode($json, true);

            $this->linkedIn_count = $json['count'];
    	    return $json['count'];
        }
        else
        {
            return $this->linkedIn_count;
        }

	}
    /**
     *
     * @ return string Returns the code for the widget, ready to be echoed
     */
    public function getWidget(
        $sites =  array('twitter', 'fblike', 'fbshare', 'fbtotal', 'digg', 'stumbleupon', 'delicious', 'buzz', 'google+1', 'linkedin'),
        $show_url = false, $vertical = true, $backcolor = '#d2d2d2', $fontcolor = '#000', $bordercolor = '#999')
    {
        $widget = '';


        // Vertical widget
        if($vertical){
            $widget .= '<style type="text/css">
            div#social_counter{
                width: 300px;
                word-wrap: break-word;
                background: '.$backcolor.';
                border: 1px solid '.$bordercolor.';
                color: '.$fontcolor.';
                padding: 5px;
                font-size: 14px;
                font-family: Tahoma, Arial, sans-serif;
                -moz-border-radius: 10px;
                -webkit-border-radius: 10px;
                border-radius: 10px; 
            }
            div#social_counter ul, div#social_counter li{margin:0; padding: 0; list-style: none;} 
            </style>';
            $widget .= '<div id="social_counter"><ul>';

            if($show_url){
                $widget .= '<li>URL: <em>'.$this->url.'</em></li>';
            }

            foreach($sites as $site)
            {
                switch($site){
                case 'twitter':
                    $widget .= '<li>Tweets: <em>'.number_format($this->getTweets()).'</em></li>';
                    break;
                case 'fblike':      
                    $widget .= '<li>FB Likes: <em>'.number_format($this->getFBLikes()).'</em></li>';
                    break;
                case 'fbshare':
                    $widget .= '<li>FB Shares: <em>'.number_format($this->getFBShares()).'</em></li>';
                    break;
                case 'fbtotal':
                    $widget .= '<li>FB Total: <em>'.number_format($this->getFBTotal()).'</em></li>';
                    break;
                case 'digg':
                    $widget .= '<li>Diggs: <em>'.number_format($this->getDiggs()).'</em></li>';
                    break;
                case 'stumbleupon':
                    $widget .= '<li>StumbleUpon Views: <em>'.number_format($this->getStumbleViews()).'</em></li>';
                    break;
                case 'delicious':
                    $widget .= '<li>Delicious: <em>'.number_format($this->getDelicious()).'</em></li>';
                    break;
                case 'buzz':
                    $widget .= '<li>Google Buzz Mentions: <em>'.number_format($this->getGBuzz()).'</em></li>';
                    break;
                case 'google+1':
                    $widget .= '<li>Google +1\'s: <em>'.number_format($this->getPlusOne()).'</em></li>';
                    break;
                case 'linkedin':
                    $widget .= '<li>LinkedIn Shares: <em>'.number_format($this->getLinkedIn()).'</em></li>';
                    break;
                }
            }

            $widget .= '</div>';
        }
        else // Horizontal widget
        {
            $widget .= '<style type="text/css">
                div#social_counter{
                width: 600px;
                background: '.$backcolor.';
                border: 1px solid '.$bordercolor.';
                color: '.$fontcolor.';
                padding: 5px;
                font-size: 14px;
                font-family: Tahoma, Arial, sans-serif;
                -moz-border-radius: 10px;
                -webkit-border-radius: 10px;
                border-radius: 10px; 
            }
            div#social_counter ul, div#social_counter li{display: inline-block;margin:0; padding: 0; list-style: none;} 
            </style>';

            $widget .= '<div id="social_counter"><ul>';
            if($show_url){
                $widget .= '<li>URL: <em>'.$this->url.'</em>&nbsp;&nbsp;&nbsp;</li>';
            }

            foreach($sites as $site)
            {
                switch($site){
                case 'twitter':
                    $widget .= '<li>Tweets: <em>'.number_format($this->getTweets()).'</em>&nbsp;&nbsp;&nbsp;</li>';
                    break;
                case 'fblike':      
                    $widget .= '<li>FB Likes: <em>'.number_format($this->getFBLikes()).'</em>&nbsp;&nbsp;&nbsp;</li>';
                    break;
                case 'fbshare':
                    $widget .= '<li>FB Shares: <em>'.number_format($this->getFBShares()).'</em>&nbsp;&nbsp;&nbsp;</li>';
                    break;
                case 'fbtotal':
                    $widget .= '<li>FB Total: <em>'.number_format($this->getFBTotal()).'</em>&nbsp;&nbsp;&nbsp;</li>';
                    break;
                case 'digg':
                    $widget .= '<li>Diggs: <em>'.number_format($this->getDiggs()).'</em>&nbsp;&nbsp;&nbsp;</li>';
                    break;
                case 'stumbleupon':
                    $widget .= '<li>StumbleUpon Views: <em>'.number_format($this->getStumbleViews()).'</em>&nbsp;&nbsp;&nbsp;</li>';
                    break;
                case 'delicious':
                    $widget .= '<li>Delicious: <em>'.number_format($this->getDelicious()).'</em>&nbsp;&nbsp;&nbsp;</li>';
                    break;
                case 'buzz':
                    $widget .= '<li>Google Buzz Mentions: <em>'.number_format($this->getGBuzz()).'</em>&nbsp;&nbsp;&nbsp;</li>';
                    break;
                case 'google+1':
                    $widget .= '<li>Google +1\'s: <em>'.number_format($this->getPlusOne()).'</em>&nbsp;&nbsp;&nbsp;</li>';
                    break;
                case 'linkedin':
                    $widget .= '<li>LinkedIn Shares: <em>'.number_format($this->getLinkedIn()).'</em>&nbsp;&nbsp;&nbsp;</li>';
                    break;
                }
            }

            $widget .= '</ul></div>';
        }
        return $widget;
    }
}