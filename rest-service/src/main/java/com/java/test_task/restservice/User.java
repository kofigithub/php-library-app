package com.java.test_task.restservice;

import javax.persistence.*;
import lombok.Data;
import lombok.EqualsAndHashCode;
import lombok.ToString;

import java.util.Date;

@Data
@ToString
@EqualsAndHashCode
@Entity
@Table(name="user")
public class User {


    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id", nullable = false)
    private Long id;
    @Column(name = "firstname", nullable = true)
    private String firstname;
    @Column(name = "lastname", nullable = true)
    private String lastname;
    @Column(name = "email", nullable = false)
    private String email;
    @Temporal(TemporalType.DATE)
    @Column(name = "birthday", nullable = true)
    private Date birthday;
    @Column(name = "username", nullable = true)
    private String username;
    @Column(name = "password", nullable = false)
    private String password;
    @Temporal(javax.persistence.TemporalType.DATE)
    @Column(name = "sysdate", nullable = false)
    private Date sysdate;

    public User() {
    }

    public User(String email, String username, String password) {
        this.email = email;
        this.username = username;
        this.password = password;
    }



}







