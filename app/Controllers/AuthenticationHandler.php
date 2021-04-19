class AuthenticationHandler
{
private $username;
private $password;
private $token_name = 'access_token';

public function __construct($username, $password)
{
$this->username = $username;
$this->password = $password;
}

public function __invoke(callable $handler)
{
return function (RequestInterface $request, array $options) use ($handler) {
if (is_null($token = Cache::get($this->token_name))) {
$response = $this->getJWT();
Cache::put($this->token_name, $token = $response->access_token, floor($response->expires_in));
}

return $handler(
$request->withAddedHeader('Authorization', 'Bearer '.$token)
->withAddedHeader('Api-Key', $this->api_key), $options
);
};
}

private function getJWT()
{
$response = (new Client)->request('POST', 'new/token/url', [
'form_params' => [
'grant_type' => 'client_credentials',
'username' => $this->username,
'password' => $this->password,
],
]);
return json_decode($response->getBody());
}
}