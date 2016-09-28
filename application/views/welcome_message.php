<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Import dan Export Excel dengan PHPExcel, Codeigniter</title>

        <link rel="stylesheet" href="<?= base_url() ?>/assets/style.css" />
    </head>
    <body>

        <div id="container">
            <h1>Import dan Export Excel dengan PHPExcel, Codeigniter</h1>

            <div id="body">
                <p>Import Data Excel</p>
                <code><?= anchor('import/', 'Import') ?></code>

                <p>Export Data Excel</p>
                <code><?= anchor('export/', 'Export') ?></code>
                
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Kontak</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($_select as $row): ?>
                            <tr>
                                <td><?= $no++?></td>
                                <td><?= $row->nama?></td>
                                <td><?= $row->alamat?></td>
                                <td><?= $row->kontak?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4"><?php echo (!$_select ? 'Tidak Ada Data!!' : 'Ada '.$_numrow.' Data.')?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
        </div>

    </body>
</html>