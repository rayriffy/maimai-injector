@extends('master')

@section('title', 'Edit')

@section('content')
<form action="/inject/{{ $cat }}.{{ $data->id }}" method="POST" class="col s12">
  <div class="row">
    <h4>Name</h4>
    <div class="input-field col s6">
      <input id="name_en" type="text" name="name_en" class="validate" value="{{ $data->name_en }}" required>
      <label for="name_en">English</label>
    </div>
    <div class="input-field col s6">
      <input id="name_jp" type="text" name="name_jp" class="validate" value="{{ $data->name_jp }}" required>
      <label for="name_jp">Japanese</label>
    </div>
  </div>
  <div class="row">
    <h4>Artist</h4>
    <div class="input-field col s6">
      <input id="artist_en" type="text" name="artist_en" class="validate" value="{{ $data->artist_en }}" required>
      <label for="artist_en">English</label>
    </div>
    <div class="input-field col s6">
      <input id="artist_jp" type="text" name="artist_jp" class="validate" value="{{ $data->artist_jp }}" required>
      <label for="artist_jp">Japanese</label>
    </div>
  </div>
  <div class="row">
    <h4>Listen</h4>
    <div class="input-field col s6">
      <input id="listen_youtube" type="text" name="listen_youtube" class="validate" value="{{ $data->listen_youtube }}" required>
      <label for="listen_youtube">YouTube</label>
    </div>
    <div class="input-field col s6">
      <input id="listen_niconico" type="text" name="listen_niconico" value="{{ $data->listen_niconico }}" class="validate">
      <label for="listen_niconico">niconico - Optional</label>
    </div>
  </div>
  <div class="row">
    <h4>Level</h4>
    <div class="input-field col s4">
      <input id="level_easy" type="text" name="level_easy" class="validate" value="{{ $data->level_easy }}" required>
      <label for="level_easy">Easy</label>
    </div>
    <div class="input-field col s4">
      <input id="level_basic" type="text" name="level_basic" class="validate" value="{{ $data->level_basic }}" required>
      <label for="level_basic">Basic</label>
    </div>
    <div class="input-field col s4">
      <input id="level_advanced" type="text" name="level_advanced" class="validate" value="{{ $data->level_advanced }}" required>
      <label for="level_advanced">Advanced</label>
    </div>
    <div class="input-field col s4">
      <input id="level_expert" type="text" name="level_expert" class="validate" value="{{ $data->level_expert }}" required>
      <label for="level_expert">Expert</label>
    </div>
    <div class="input-field col s4">
      <input id="level_master" type="text" name="level_master" class="validate" value="{{ $data->level_master }}" required>
      <label for="level_master">Master</label>
    </div>
    <div class="input-field col s4">
      <input id="level_remaster" type="text" name="level_remaster" class="validate" value="{{ $data->level_remaster }}">
      <label for="level_remaster">Re-Master - Optional</label>
    </div>
  </div>
  <div class="row">
    <h4>More</h4>
    <div class="input-field col s6">
      <input id="image_url" type="text" name="image_url" class="validate" value="{{ $data->image_url }}" required>
      <label for="image_url">Image URL</label>
    </div>
    <div class="input-field col s4">
      <input id="version" type="text" name="version" class="validate" value="{{ $data->version }}" required>
      <label for="version">Version</label>
    </div>
    <div class="input-field col s2">
      <input id="bpm" type="text" name="bpm" class="validate" value="{{ $data->bpm }}" required>
      <label for="bpm">BPM</label>
    </div>
    <div class="input-field col s4">
      <select name="regionlocked">
        <option value="0"
        @if ($data->regionlocked == 0)
          selected
        @endif
        >No</option>
        <option value="1"
        @if ($data->regionlocked == 1)
          selected
        @endif
        >Fuck, yes!</option>
      </select>
      <label>Region Locked?</label>
    </div>
  </div>
  <input type="hidden" name="_method" value="PUT">
  {{ csrf_field() }}
  <div class="row">
    <button type="submit" class="waves-effect waves-light btn blue">SUBMIT</button>
    <a class="waves-effect waves-light btn red modal-trigger" href="#delete">DELETE</a>
  </div>
</form>

<div id="delete" class="modal">
    <div class="modal-content">
      <h4>Deleting Data</h4>
      <p>Are you sure to continue?</p>
    </div>
    <div class="modal-footer">
      <form action="/inject/{{ $cat }}.{{ $data->id }}" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        {{ csrf_field() }}
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">NO</a>
        <button type="submit" class="modal-close waves-effect waves-green btn-flat">YES</button>
      </form>
    </div>
  </div>
@endsection

@section('footer','')