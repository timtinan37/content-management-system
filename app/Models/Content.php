<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use GuzzleHttp\Client;

class Content extends Model
{
    protected $fillable = 
    [
		'title',
		'attachment',
		'description',
		'type',
		'section',
		'is_published',
    ];

    public function video_thumbnail()
    {
		$client = new Client([
		    // Base URI is used with relative requests
		    'base_uri' => 'https://www.youtube.com/',
		    // You can set any number of default request options.
		    'connect_timeout' => 10.0,
		]);

		try 
		{
			$response = $client->request('GET', 'oembed', [
			    					'query' => ['format' => 'json', 'url' => $this->attachment],
			    					'timeout'  => 10.0,
			    				]);
			$data = json_decode($response->getBody()->getContents());
			return $data->thumbnail_url;			
		}
		catch (\Exception $e){}
    }

    public function video_embed_url()
    {
    	$video_id = Str::after($this->attachment, 'https://www.youtube.com/watch?v=');
    	return "https://www.youtube.com/embed/$video_id";
    }
}
