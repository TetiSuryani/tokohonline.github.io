<?php
FUNCTION main()

  ARRAY of INT[] arr = {5,5,10,25,25,50,50,50,90};
  INT length = arr.length
  length = funD(arr, length)

  FOR (INT i = 0; i < length; i++)
    print(arr[i] + ” ”)
  END FOR

END FUNCTION

FUNCTION funD(ARRAY of INT[] arr, INT n) -> INT

  IF (n==0 || n==1) 
    RETURN n
  END IF

  INT j = 0
  FOR (INT i = 0; i < n; i++)
    IF (arr[i]) != arr[i+1])
      arr[j++] = arr[i]
    END IF
  END FOR

  arr[j++] = arr[n-1]
  RETURN j

END FUNCTION

?>