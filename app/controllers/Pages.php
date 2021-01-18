<?php
class Pages extends Controller
{
  public function __construct()
  {
  }
  public function index()
  {
    $data = ['title' => "Welcome Page Of Robert's MVC"];
    $this->view('pages/index', $data);
  }
  public function about()
  {
    $data = ['title' => "This is the default About Us page."];
    $this->view('pages/about', $data);
  }
}
