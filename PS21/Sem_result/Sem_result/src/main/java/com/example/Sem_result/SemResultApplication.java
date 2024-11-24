package com.example.Sem_result;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.boot.autoconfigure.domain.EntityScan;
import org.springframework.data.jpa.repository.config.EnableJpaRepositories;
@SpringBootApplication (scanBasePackages = {"com.example.controller", "com.example.service", "com.example.repo", "com.example.model"})
@EntityScan(basePackages = {"com.example.model"})
@EnableJpaRepositories(basePackages = {"com.example.repo"})
public class SemResultApplication {

	public static void main(String[] args) {
		SpringApplication.run(SemResultApplication.class, args);
	}

}
