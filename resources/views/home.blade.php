@extends('layouts.app')

@section('content')
  <div class="container">
  <div class="row">

      <div id="no-more-tables">
          <table class="col-md-12 table-bordered table-striped table-condensed cf">
          <thead class="cf">
            <tr>
              <th >Id</th>
              <th >First Name</th>
              <th >Last Name</th>
              <th >Email</th>
              <th >Contact</th>
              <th width="400">Message</th>
              <th >Timimg</th>

            </tr>
          </thead>
          <tbody>
              @foreach ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->fname }}</td>
              <td>{{ $user->lname }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->phone }}</td>
              <td>{{ $user->message }}</td>
              <td>{{$user->created_at}}</td>
              <tr>
                @endforeach
          </tbody>
    </table>
  </div>
</div>
</div>
@endsection
