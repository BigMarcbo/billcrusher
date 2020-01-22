<!-- 
   <?php 
	
	// $string = "167. [H. 3635] Bill (H.) establishing a department of municipal finance in the town of Dennis (House, No. 3635). 2d.";

	// if (preg_match("/H. /", $string, $array)) {
	// 	echo $array[0];
	// }


?>
 -->
 <div class="panel panel-default">
		<div class="panel-heading">
Enter Calendar		
</div>

		<div class="panel-body">
			<form action="{{ route('new.crush') }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="title">Bills</label>
					<input type="text" name="bills" class="form-control" rows="10" cols="80">
				</div>


				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">
							Crush em Bills!						
						</button>
					</div>
				</div>
			
			</form>
		</div>
	</div>

 <?php

// $text = "173. [H. 4218] Bill (H.) regarding breakfast after the bell (House, No. 4218). 2d.
//             [On House, No. 591.]
//             [From the committee on Education.]
//             [The committee on Ways and Means (Rodrigues) recommends that the bill be amended by striking out all after the enacting clause and inserting in place thereof the text of Senate document numbered 2460.]
//             [Also based on Senate, No. 267.]
//             [Order relative to subject matter adopted.]";

// // $regex = '/(\[h|\[s)(.*?)\]/i';
// // $regex = '/(?<=\[).*?(?=\])/i';
// $regex = '/(s\.|h\.).*?(?=\])/i';

// preg_match_all($regex, $text, $matches);

// $bills = [];

// foreach ($matches[0] as $match) {
//   $bills[] = str_replace('. ', 'B', $match);
// }

// var_dump($bills);