<?php

namespace App\Models\Classes;

class Curl
{
	public function curlClasses($url)
	{
		try {
			$ch = curl_init();
			// Seta algumas opções
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
			// Envia a requisição e salva a resposta
			$response = curl_exec($ch);
			// Conferir se houve algum error.
			if(curl_exec($ch) == false){
			    echo 'Curl error: '.curl_error($ch);
			}
			// Fecha a requisição e limpa a memória
			curl_close($ch);

			return $response;
			
		} catch (Exception $e) {
			return	[
					'status' => 'error',
					'msg' => 'curl'
					];
		}
	}
}
