
e=[200,100,50,20,10,5,2,1]

s=750
i=0

while i<=(len(e)-1):
	j=0


	while s >= e[i]:
		j = j+1
		s = s - e[i]
	print(e[6]/100)
	#print (j)
	# print (e[i]/100)
	# print (" ")
	i = i+1
