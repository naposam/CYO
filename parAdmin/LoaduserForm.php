<?php
                                            function fill_region($mysqli){
												$output='';
												$sql="SELECT * from region";
												$result=mysqli_query($mysqli,$sql);
                                                while($row = mysqli_fetch_array($result)){
                                                	$output.='<option  value="'.$row['reg_id'].'">'.$row['name'].'</option>';
                                                }
                                                return $output;
											} 
                                             function fill_diocese($mysqli){
                                             	$output='';
                                             	$sql="select * from diocese";
												           $result=mysqli_query($mysqli,$sql);
                                                while($row = mysqli_fetch_array($result)){
                                                	$output.='<option value="'.$row['diocese_id'].'">'.$row['diocese_name'].'</option>';
                                                }
                                                return $output;

                                             }
                                             function fill_deanery($mysqli){
                                             	$output='';
                                             	$sql="select * from deanery";
												$result=mysqli_query($mysqli,$sql);
                                                while($row = mysqli_fetch_array($result)){
                                                	$output.='<option value="'.$row['deanery_id'].'">'.$row['deanery_name'].'</option>';
                                                }
                                                return $output;

                                             }
                                             function fill_parish($mysqli){
                                                $output='';
                                                $sql="select * from parish";
                                    $result=mysqli_query($mysqli,$sql);
                                                while($row = mysqli_fetch_array($result)){
                                                   $output.='<option value="'.$row['parish_id'].'">'.$row['parish_name'].'</option>';
                                                }
                                                return $output;

                                             }
                                         function fill_unit($mysqli){
                                                $output='';
                                                $sql="select * from unit";
                                    $result=mysqli_query($mysqli,$sql);
                                                while($row = mysqli_fetch_array($result)){
                                                   $output.='<option value="'.$row['unit_id'].'">'.$row['unit_name'].'</option>';
                                                }
                                                return $output;

                                             }
											?>