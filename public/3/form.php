<table border="2">
    <tbody>
        <tr>
            <th>ФИО</th>
            <td><?= htmlentities($_GET['fio']) ?></td>
        </tr>
        
        <tr>
            <th>Гаджет</th>
            <td><?= htmlentities($_GET['oculus']) ?></td>
        </tr>

        <tr>
            <th>Понравилось ли</th>
            <td><?= htmlentities($_GET['test']) ?></td>
        </tr>

            <tr>
            <th>Понравилось:</th>
            <td><?= join(', ', $_GET['like']) ?></td>
        </tr>
    </tbody>
</table>

