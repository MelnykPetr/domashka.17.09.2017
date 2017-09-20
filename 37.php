

<?php
/*70.Возвращение значений функциями
Реализовать функцию, которая определяет, будет ли число простым числом
To realize a function, that determines whether a number will be a prime number**/
	
	
	function sieve(n){
	S = []; 
	S[1] = 0; // 1 - не простое число
	// заполняем решето единицами
	for(k=2; k<=n; k++)
		S[k]=1;
	
	for(k=2; k*k<=n; k++){
		// если k - простое (не вычеркнуто)
		if(S[k]==1){ 
			// то вычеркнем кратные k
			for(l=k*k; l<=n; l+=k){
				S[l]=0;
				}
			}
		}
	return S;
	}