@includeIf('admin.head', ['title' => 'Clientes'])

@includeIf('admin.navbar')

<div
    class="md:row-start-2 col-span-3 md:col-start-2 md:col-end-7 flex justify-center flex-col align-items-center p-3 lg:p-8 text-center">
    <div>
        <h2 class="text-3xl font-sairaBold pb-8 uppercase text-shadow">Clientes</h2>
    </div>
    <table id="example">
        <thead class="bg-gray-700 text-white">
            <th>ID</th>
            <th>EMAIL</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>CELULAR</th>
            <th>CIUDAD</th>
            <th>EDICIÓN</th>
        </thead>
        <tbody>
            <tr>
                <td>F</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
        <tfoot class="bg-gray-700 text-white">
            <th>ID</th>
            <th>EMAIL</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>CELULAR</th>
            <th>CIUDAD</th>
            <th>EDICIÓN</th>
        </tfoot>
    </table>
</div>

</div>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "responsive": true,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
            }
        });
    });
</script>

@includeIf('admin.footer')
