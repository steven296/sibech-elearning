<div class="tab-pane fade show" id="teacher" role="tabpanel" aria-labelledby="teacher-tab">
    <table class="table table-striped table-bordered dt-responsive nowrap" id="teach" >
        <thead class="thead-dark">
            <tr>
                <th scope="col">Foto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
                <th scope="col">Fecha de creación</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($teachers as $teacher)
                <tr>
                    <td><img src="{{$teacher->pathAttachment()}}" width="50" height="50" style="border-radius:30px"></td>
                    <td>{{$teacher->name}}</td>
                    <td>{{$teacher->last_name}}</td>
                    <td>{{$teacher->email}}</td>
                    <td>{{$teacher->created_at->format('d/m/Y')}}</td>
                    <form action="{{route('user.update',$teacher->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        @if ($teacher->status == 1)
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