<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marriage_Request extends Model
{
    use HasFactory;
    protected $table = 'Marriage_Mohon';
    protected $fillable = [
        //Marriage_Mohon
        'Slip_Mohon_Online',
        'U_IC_No',
        'MM_Other_Info_ID',
        'Birthday',
        'Age',
        'Ethnic',
        'Rationality',
        'IC_Address',
        'Current_Address',
        'Home_Num',
        'Edu_Level',
        'Employment_Sector',
        'Job',
        'Job_Address',
        'Office_Phone',
        'Amount_Salary',
        'Marriage_Status',
        'PrepCourse_ID',
        'Status_Saudara_Baru',
        'Request_Status',

        //MM_Other_info
        'created_at',
        'updated_at',
        'Request_Status',
        'Date_Request',
        'Date_Nikah',
        'Marriage_Place',
        'Marriage_Country',
        'Marriage_Place_Address',
        'Marriage_Dowry_Type',
        'Marriage_Dowry',
        'Other_Grants',
        'W_IC_No',
        'W_Name',
        'W_Address',
        'W_Phone',
        'W_Category_Nikah',

        //MM_Pasangan_Info
        'Pasangan_IC_No',
        'P_Name',
        'P_Date_of_Birth',
        'P_Age',
        'P_Ethnic',
        'P_Rationality',
        'P_IC_Address',
        'P_Current_Address',
        'P_Home_Num',
        'P_Current_Address',
        'P_Edu_Level',
        'P_Employment_Sector',
        'P_Job',
        'P_Job_Address',
        'P_Office_Phone',
        'P_Amount_Salary',
        'P_Spouse_Name',
        'P_Marriage_Status',
        'P_PrepCourse_ID',
        'P_Status_Saudara_Baru',
        'P_Date_Convert_Islam',
        'P_Islam_Register_No',
        'P_Marriage_Couple_License__No',
        'P_Phone_No',

    ];

    
    public function user()
    {
        return $this->belongsTo(User::class, 'U_IC_No', 'ic');
    }
}
