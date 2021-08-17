@includeIf('admin.head', ['title' => 'Clientes'])

@includeIf('admin.navbar')

<div
    class="md:row-start-2 col-span-3 md:col-start-2 md:col-end-7 flex justify-center flex-col align-items-center p-3 lg:p-8 text-center">
    <div>
        <h2 class="text-3xl font-sairaBold pb-8 uppercase text-shadow">Clientes</h2>
    </div>
    <table id="datatable">
        <thead class="bg-gray-700 text-white">
            <th>ID</th>
            <th>EMAIL</th>
            <th>NOMBRE</th>
            <th>IMAGEN</th>
            <th>CELULAR</th>
            <th>CIUDAD</th>
            <th>EDICIÓN</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->name}}</td>
                    <td><img src="{{$user->avatar}}" alt=""></td>
                    <td>{{$user->email_verified_at}}</td>
                    <td>{{$user->email_verified_at}}</td>
                    <td>{{$user->email_verified_at}}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot class="bg-gray-700 text-white">
            <th>ID</th>
            <th>EMAIL</th>
            <th>NOMBRE</th>
            <th>IMAGEN</th>
            <th>CELULAR</th>
            <th>CIUDAD</th>
            <th>EDICIÓN</th>
        </tfoot>
    </table>
</div>

</div>

<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            "responsive": true,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
            }
        });
    });
</script>

@includeIf('admin.footer')
