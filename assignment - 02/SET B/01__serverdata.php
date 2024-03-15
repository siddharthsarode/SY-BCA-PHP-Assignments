<?php
$cnt = 0;
$output = '<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Ser No</th>
      <th scope="col">Key</th>
      <th scope="col">Value</th>
    </tr>
  </thead>
  <tbody>';
foreach ($_SERVER as $key => $value) {
    $output .= '    
    <tr>
      <th scope="row">' . $cnt . '</th>
      <td>' . $key . '</td>
      <td>' . $value . '</td>
    </tr>';
    $cnt++;
}

$output .= '</tbody></table>';
echo $output;
