<div class="tab-pane fade show active"  id="students" role="tabpanel" aria-labelledby="students-tab">
  <table  id="student" class="table table-striped table-bordered dt-responsive nowrap">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Foto</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Email</th>
        <th scope="col">Fecha creación</th>
        <th>Estado</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($students as $student)
        <tr>
          <td><img src="{{$student->pathAttachment()}}" width="50" height="50" style="border-radius:30px"></td>
          <td>{{$student->name}}</td>
          <td>{{$student->last_name}}</td>
          <td>{{$student->email}}</td>
          <td>{{$student->created_at->format('d/m/Y')}}</td>
          <form action="{{route('user.update',$student->id)}}" method="post">
              @csrf
              @method('PUT')
            @if ($student->status == 1)
                <input type="hidden" name="status" value="2">
                <td><button type="submit" class="btn btn-danger" title="Deshabilitar cuenta">Deshabilitar</button></td>
            @else
              <input type="hidden" name="status" value="1">
                <td><button type="submit" class="btn btn-success" title="Habilitar cuenta">Habilitar</button></td>
            @endif
          </form>
          
        </tr>
      @empty
        No hay estudiantes
      @endforelse
    </tbody>
  </table>   
</div>
