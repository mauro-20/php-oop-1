<?php

class Movie {
  private $title;
  private $year;
  private $cast;
  private $director;
  private $genre;
  private $runtime;

  public function __construct($_title, $_year, $_cast, $_director, $_genre, $_runtime)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this->cast = $_cast;
    $this->director = $_director;
    $this->genre = $_genre;
    $this->runtime = $_runtime;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getYear() {
    return $this->year;
  }

  public function getCast()
  {
    return $this->cast;
  }

  public function getDirector()
  {
    return $this->director;
  }

  public function getGenre()
  {
    return $this->genre;
  }

  public function getRuntime()
  {
    return $this->runtime;
  }
}