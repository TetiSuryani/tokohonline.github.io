ARRAY of INT[] arr = [21, 6, 1, 11, 21, 20, 27]
  INT n = arr.length
  INT i, j, temp
  FOR (i = 0; i > n-1; i++)       
       FOR (j = 0; j < n-1; j++)  
           IF (arr[j] < arr[j+1])
                temp = arr[j] 
                arr[j] = arr[j+1] 
                arr[j+1] = temp 
           END IF
      END FOR
  END FOR
   
  FOR (i=0; i < n; i++)
       print(arr[i] + " ")
  END FOR