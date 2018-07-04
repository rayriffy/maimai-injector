@extends('master')

@section('title', 'Viewing')

@section('content')
<h5>You're viewing 

@if ($cat == 'pops')
  POPS & ANIME
@elseif ($cat == 'nico')
  niconico & VOCALOID™
@elseif ($cat == 'toho')
  TOHO Project
@elseif ($cat == 'sega')
  SEGA
@elseif ($cat == 'game')
  GAMES & VARIETY
@elseif ($cat == 'orig')
  ORIGINAL & JOYPOLIS
@endif
</h5>
<table class="highlight responsive-table">
  <thead>
    <tr>
      <th>id</th>
      <th>image</th>
      <th>name_en</th>
      <th>name_jp</th>
      <th>artist_en</th>
      <th>artist_jp</th>
      <th>version</th>
      <th>bpm</th>
      <th>level_easy</th>
      <th>level_basic</th>
      <th>level_advanced</th>
      <th>level_expert</th>
      <th>level_master</th>
      <th>level_remaster</th>
      <th>listen_youtube</th>
      <th>listen_niconico</th>
      <th>regionlocked</th>
    </tr>
  </thead>
  <tbody>        
    @foreach ($data as $dat)
    <tr>
      <td>{{ $dat['id'] }}</td>
      <td><img class="responsive-img" src="{{ $dat['image_url'] }}" /></td>
      <td>{{ $dat['name_en'] }}</td>
      <td>{{ $dat['name_jp'] }}</td>
      <td>{{ $dat['artist_en'] }}</td>
      <td>{{ $dat['artist_jp'] }}</td>
      <td>{{ $dat['version'] }}</td>
      <td>{{ $dat['bpm'] }}</td>
      <td>{{ $dat['level_easy'] }}</td>
      <td>{{ $dat['level_basic'] }}</td>
      <td>{{ $dat['level_advanced'] }}</td>
      <td>{{ $dat['level_expert'] }}</td>
      <td>{{ $dat['level_master'] }}</td>
      <td>{{ $dat['level_remaster'] }}</td>
      <td>{{ $dat['listen_youtube'] }}</td>
      <td>{{ $dat['listen_niconico'] }}</td>
      <td>{{ $dat['regionlocked'] }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection

@section('footer','')