package com.example.model;

import jakarta.persistence.*;

@Entity
@Table(name = "student_results") 
public class Sem_model {

	@Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;

    public String studentName;
    public double mse1, ese1, mse2, ese2, mse3, ese3, mse4, ese4;


    public Sem_model() {
    }


    public Sem_model(String studentName, double mse1, double ese1, double mse2, double ese2, double mse3, double ese3, double mse4, double ese4) {
        this.studentName = studentName;
        this.mse1 = mse1;
        this.ese1 = ese1;
        this.mse2 = mse2;
        this.ese2 = ese2;
        this.mse3 = mse3;
        this.ese3 = ese3;
        this.mse4 = mse4;
        this.ese4 = ese4;
    }


    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }
    
    public String getStudentName() {
        return studentName;
    }

    public void setStudentName(String studentName) {
        this.studentName = studentName;
    }

    public double getMse1() {
        return mse1;
    }

    public void setMse1(double mse1) {
        this.mse1 = mse1;
    }

    public double getEse1() {
        return ese1;
    }

    public void setEse1(double ese1) {
        this.ese1 = ese1;
    }

    public double getMse2() {
        return mse2;
    }

    public void setMse2(double mse2) {
        this.mse2 = mse2;
    }

    public double getEse2() {
        return ese2;
    }

    public void setEse2(double ese2) {
        this.ese2 = ese2;
    }

    public double getMse3() {
        return mse3;
    }

    public void setMse3(double mse3) {
        this.mse3 = mse3;
    }

    public double getEse3() {
        return ese3;
    }

    public void setEse3(double ese3) {
        this.ese3 = ese3;
    }

    public double getMse4() {
        return mse4;
    }

    public void setMse4(double mse4) {
        this.mse4 = mse4;
    }

    public double getEse4() {
        return ese4;
    }

    public void setEse4(double ese4) {
        this.ese4 = ese4;
    }

    public double calculateFinal(double mse, double ese) {
        return (mse * 0.3) + (ese * 0.7);
    }

    public double[] getFinalResults() {
        return new double[]{
            calculateFinal(mse1, ese1),
            calculateFinal(mse2, ese2),
            calculateFinal(mse3, ese3),
            calculateFinal(mse4, ese4)
        };
    }
}
