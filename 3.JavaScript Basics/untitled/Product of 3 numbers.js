function exercise(nums) {
    let num1=Number(nums[0]);
    let num2=Number(nums[1]);
    let num3=Number(nums[2]);
    if(num1*num2*num3>0)
    {
        return "Positive";
    }
    else{
        return "Negative"
    }
}