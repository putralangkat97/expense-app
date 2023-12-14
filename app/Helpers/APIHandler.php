<?php

namespace App\Helpers;

use Exception;
use Illuminate\Support\Facades\Http;
use Throwable;

class APIHandler
{
    public function sessionData()
    {
        return session('user-logged-in');
    }

    public function getUrl(string $prefix): string
    {
        return config('api.url') . $prefix;
    }

    public function getToken(): string
    {
        return $this->sessionData()['token'];
    }

    public function getUserId(): string|int
    {
        $user = $this->sessionData()['user'];
        return $user['id'];
    }

    public function getData(string $url)
    {
        try {
            $response = Http::acceptJson()
                ->withToken($this->getToken())
                ->get($this->getUrl($url));

            if ($response->successful()) {
                return $response->collect()['results'];
            } else {
                dd("getData gagal", $response->json());
            }
        } catch (Throwable $th) {
            dd("getData", $th->getMessage());
        }
    }

    public function storeData(string $url, array $data)
    {
        try {
            $response = Http::acceptJson()
                ->withToken($this->getToken())
                ->post($this->getUrl($url), $data);

            if ($response->successful()) {
                return $response->collect()['results'];
            } else {
                dd("storeData gagal", $response->json());
            }
        } catch (Throwable $th) {
            dd("storeData", $th->getMessage());
        }
    }

    public function deleteData(string $url)
    {
        try {
            $response = Http::acceptJson()
                ->withToken($this->getToken())
                ->delete($this->getUrl($url));

            if ($response->successful()) {
                return $response->collect()['results'];
            } else {
//
            }
        } catch (Throwable $th) {
            dd("deleteData", $th->getMessage());
        }
    }
}
