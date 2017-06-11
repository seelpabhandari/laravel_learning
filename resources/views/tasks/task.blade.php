  <div class="album text-muted">
      <div class="container">

        <div class="row">
          <div class="col-md-10">
          @foreach($tasks as $task)
          <div class="card">
            <a href="/tasks/{{$task->id}}"><h2>{{$task->title}}</h2></a>
              <p>{{$task->body}}</p>
              <p>{{$task->created_at->toFormattedDateString()}}</p>
          </div>
          @endforeach
          </div>
          <div class="col-md-2">
            <h4>Archives</h4>
           
              <ol class="list-unstyled">
                 @foreach ($archives as $stats)
                    <li>
                      <a href=" /?month={{$stats['month']}}&year={{$stats['year']}}">{{$stats['month'].' '. $stats['year']}}</a>
                    </li>
                 @endforeach

              </ol>
         
          </div>
   
        </div>

      </div>
    </div>