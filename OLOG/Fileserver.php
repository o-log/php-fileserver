<?php

namespace OLOG;

class Fileserver
{
    protected $base_url;
    protected $storages_map_arr;

    public function __construct($base_url, $storages_map_arr)
    {
        $this->base_url = $base_url;
        $this->storages_map_arr = $storages_map_arr;
    }

    public function getFileUrlForStorageAndPathInStorage($storage_id, $path_in_storage)
    {
        Assert::assert(array_key_exists($storage_id, $this->storages_map_arr));
        return Url::buildUrl([$this->base_url, $this->storages_map_arr[$storage_id], $path_in_storage]);
    }
}
