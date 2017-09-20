

<?php
/*70.����������� �������� ���������
����������� �������, ������� ����������, ����� �� ����� ������� ������
To realize a function, that determines whether a number will be a prime number**/
	
	
	function sieve(n){
	S = []; 
	S[1] = 0; // 1 - �� ������� �����
	// ��������� ������ ���������
	for(k=2; k<=n; k++)
		S[k]=1;
	
	for(k=2; k*k<=n; k++){
		// ���� k - ������� (�� ����������)
		if(S[k]==1){ 
			// �� ��������� ������� k
			for(l=k*k; l<=n; l+=k){
				S[l]=0;
				}
			}
		}
	return S;
	}