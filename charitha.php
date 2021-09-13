
<?php
class APIClient
{
    private $url;
    private $api_key;
    private $client_id;

    public function __construct($api_key, $client_id)
    {
        //$this->url = "https://api.coindesk.com/v1/bpi/currentprice.json";
        $this->url = "https://reqres.in/api/users?page=1";
        $this->api_key = $api_key;
        $this->client_id = $client_id;
        $this->connect();
    }

    private function connect()
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->url);
        curl_setopt(
            $curl,
            CURLOPT_HTTPHEADER,
            array(
                'APIKEY: ' . $this->api_key,
                'client_id : ' . $this->client_id,
                'Content-Type: application/json'
            )
        );

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

        $result = curl_exec($curl);
        curl_close($curl);

        if (!$result) {
            return ['msg' => '400', 'data' => 'bad request'];
        } elseif (curl_errno($curl)) {
            return ['msg' => '500', 'data' => curl_error($curl)];
        } else {
            return ['msg' => '200', 'data' => $result];
        }
    }

    public function get_hosts()
    {
        $result = $this->connect();
        return $result;
    }
}

$client = new APIClient("a", "b");
$hosts = $client->get_hosts();

if ($hosts['msg'] == 200) {
    var_dump($hosts['data']);
} else {
    // error
    var_dump($hosts['data']);
}
