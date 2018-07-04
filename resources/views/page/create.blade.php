@extends('master')

@section('title', 'Insert')

@section('content')
<form action="/inject" method="POST" class="col s12">
  <div class="row">
    <h4>Category</h4>
    <div class="input-field col s4">
      <select name="cat" required>
        <option value="" disabled selected>Choose your option</option>
        <option value="pops">POPS & ANIME</option>
        <option value="nico">niconico & VOCALOID</option>
        <option value="toho">TOUHOU Project</option>
        <option value="sega">SEGA</option>
        <option value="game">GAME & VARIETY</option>
        <option value="orig">ORIGINAL & JOYPOLIS</option>
      </select>
      <label>Category</label>
    </div>
  </div>
  <div class="row">
    <h4>Name</h4>
    <div class="input-field col s6">
      <input id="name_en" type="text" name="name_en" class="validate" required>
      <label for="name_en">English</label>
    </div>
    <div class="input-field col s6">
      <input id="name_jp" type="text" name="name_jp" class="validate" required>
      <label for="name_jp">Japanese</label>
    </div>
  </div>
  <div class="row">
    <h4>Artist</h4>
    <div class="input-field col s6">
      <input id="artist_en" type="text" name="artist_en" class="validate" required>
      <label for="artist_en">English</label>
    </div>
    <div class="input-field col s6">
      <input id="artist_jp" type="text" name="artist_jp" class="validate" required>
      <label for="artist_jp">Japanese</label>
    </div>
  </div>
  <div class="row">
    <h4>Listen</h4>
    <div class="input-field col s6">
      <input id="listen_youtube" type="text" name="listen_youtube" class="validate" required>
      <label for="listen_youtube">YouTube</label>
    </div>
    <div class="input-field col s6">
      <input id="listen_niconico" type="text" name="listen_niconico" class="validate">
      <label for="listen_niconico">niconico - Optional</label>
    </div>
  </div>
  <div class="row">
    <h4>Level</h4>
    <div class="input-field col s4">
      <input id="level_easy" type="text" name="level_easy" class="validate" required>
      <label for="level_easy">Easy</label>
    </div>
    <div class="input-field col s4">
      <input id="level_basic" type="text" name="level_basic" class="validate" required>
      <label for="level_basic">Basic</label>
    </div>
    <div class="input-field col s4">
      <input id="level_advanced" type="text" name="level_advanced" class="validate" required>
      <label for="level_advanced">Advanced</label>
    </div>
    <div class="input-field col s4">
      <input id="level_expert" type="text" name="level_expert" class="validate" required>
      <label for="level_expert">Expert</label>
    </div>
    <div class="input-field col s4">
      <input id="level_master" type="text" name="level_master" class="validate" required>
      <label for="level_master">Master</label>
    </div>
    <div class="input-field col s4">
      <input id="level_remaster" type="text" name="level_remaster" class="validate">
      <label for="level_remaster">Re-Master - Optional</label>
    </div>
  </div>
  <div class="row">
    <h4>More</h4>
    <div class="input-field col s6">
      <input id="image_url" type="text" name="image_url" class="validate" required>
      <label for="image_url">Image URL</label>
    </div>
    <div class="input-field col s4">
      <input id="version" type="text" name="version" class="validate" required>
      <label for="version">Version</label>
    </div>
    <div class="input-field col s2">
      <input id="bpm" type="text" name="bpm" class="validate" required>
      <label for="bpm">BPM</label>
    </div>
    <div class="input-field col s4">
      <select name="regionlocked">
        <option value="0" selected>No</option>
        <option value="1">Fuck, yes!</option>
      </select>
      <label>Region Locked?</label>
    </div>
  </div>
  <input type="hidden" name="key" value="jZ83Xych2SnJQnFgHG9v">
  {{ csrf_field() }}
  <div class="row">
    <button type="submit" class="waves-effect waves-light btn blue">SUBMIT</button>
  </div>
</form>
@endsection

@section('footer','')