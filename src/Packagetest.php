<?php
namespace Gy\Packagetest;
use Illuminate\Session\SessionManager;
use Illuminate\Config\Repository;
use App\Models\Banner;
class Packagetest
{
 /**
  * @var SessionManager
  */
 protected $session;
 /**
  * @var Repository
  */
 protected $config;
 /**
  * Packagetest constructor.
  * @param SessionManager $session
  * @param Repository $config
  */
 public function __construct(SessionManager $session, Repository $config)
 {
     $this->session = $session;
     $this->config = $config;
 }
 /**
  * @param string $msg
  * @return string
  */
 public function test_banner(){
      $data = Banner::get()->toarray(); 
     return $data;
 }
}

